<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ImageFactory;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Resume;
use App\Models\Titre;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class ArticleAdminController extends Controller
{
    public function data(Request $request, $search=""){
        $titres=Titre::where('txt','like','%'.$search.'%')->orderBy('created_at','asc');
        if($request->has('limit')){
            $titres=$titres->paginate($request->limit);
            $dt=$titres->items();
        }
        else{
            $dt=$titres->get();
        }
                            ;
        $datas= DataTables::of($dt)
            ->addColumn('article_id',function($titre){
                return $titre->article->id;
            })
            ->addColumn('image',function($titre){
                return $titre->article->image;
            })
            ->addColumn('redacteur',function($titre){
                if(isset($titre->article->redacteur)){
                    return $titre->article->redacteur->name;
                }
                return 'non defini';
            })
            ->addColumn('date_fc',function($titre){
                $date=($titre->article->created_at)?$titre->article->created_at->format('d-m-Y h:i'):'non defini';
                return $date;
            })
            ->addColumn('date_fu',function($titre){
                $date=($titre->article->updated_at)?$titre->article->created_at->format('d-m-Y h:i'):'non defini';
                return $date;
            })
            ->rawColumns(['date_f,date_fc'])
            ->with('status',true)

            ->with('message','');
            if($request->has('limit')){
                $datas->with("per_page",$titres->count())
                    ->with("current_page",$titres->currentPage())
                    ->with("last_page",$titres->lastPage())
                    ->with("first_page_url",$titres->url(1))
                    ->with("last_page_url",$titres->url($titres->lastPage()))
                    ->with("next_page_url",$titres->url($titres->currentPage()+1))
                    ->with("prev_page_url",$titres->url($titres->currentPage()-1));
            }
            return             $datas->toJson();

    }

    public function index(Request $request){
        return Inertia::render('Admin/Article/PListe', [

        ]);
    }


    public function create()
    {
        $article=new Article;
        $article->elements=[];
        return Inertia::render('Admin/Article/PCreate', [
            'article'=>$article,
            "mode"=>'create',
            'categories'=>Categorie::all(),
            'redacteurs'=>User::where('role',User::ROLE_REDACTEUR)->get()
        ]);
    }


    public function save(Request $request,$validator,$id=0){
        // dd($request->all());
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'messages'=>$validator->errors(),
            ]);
        }
        else{
            DB::beginTransaction();
            $this->saveElements($request,1);
            try {
                if($id!=0){
                    $article=Article::find($id);
                    $titre=$article->titre;
                    $resume=$article->resume;
                }
                else{
                    $article=new Article();
                    $titre= new Titre();
                    $resume= new Resume();
                }
                //titre
                $titre->txt=$request->titre_client;
                $titre->save();
                //resume
                $resume->txt=$request->resume_client;
                $resume->save();
                //article
                $article->categorie_id=$request->categorie_id;
                $article->redacteur_id=$request->redacteur_id;
                $article->titre_id=$titre->id;
                $article->resume_id=$resume->id;
                $article->save();
                 ImageFactory::store($request,$article,"photo","images_articles/".$article->id,$article->id,'image');
                $article->update();
                DB::commit();

                $this->saveElements($request,$article->id);
                return response()->json([
                    'status'=>true,
                    'id'=>$article->id,
                ]);

            } catch (\Throwable $th) {
                //throw $th;
                DB::rollback();
                return response()->json([
                    'status'=>false,
                    'message'=>'',
                    'er'=>$th->getMessage()
                ]);
            }



        }
    }


    public function saveElements(Request $request,$id){
        $elements=json_decode($request->elements);
        if($request->articles_files){
            foreach ($request->articles_files as $key=> $file) {
                $name=$key.".".$file->extension();
                //dd(Storage::path($file));
                $file->move("images_articles/",$name);
                foreach($elements as $element){
                    if($element->position == $key){
                        $element->mmodel->src="/images_articles/liste/$id/".$name;

                    }
                }
            }
        }
        Storage::put('articles/'.$id.'.json', json_encode($elements));


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'titre_client'=>'required|max:255',
            'resume_client'=>'required|max:255',
            'redacteur_id'=>'exists:users,id',
            'categorie_id'=>'exists:categories,id',
            'photo'=>'required|image',
        ]);
        return $this->save($request,$validator);

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::findOrFail($id);
        $elements=Storage::exists('articles/'.$id.'.json')?Storage::get('articles/'.$id.'.json'):'';
        $article->elements=(strlen($elements))?json_decode($elements):[];
        $article->titre_client=$article->titre->txt;
        $article->resume_client=$article->resume->txt;
        return Inertia::render('Admin/Article/PCreate', [
            'article'=>$article,
            "mode"=>'edit',
            'categories'=>Categorie::all(),
            'redacteurs'=>User::where('role',User::ROLE_REDACTEUR)->get()
        ]);


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ar=[
            'id'=>'exists:articles,id',
            'titre_client'=>'required|max:255',
            'resume_client'=>'required|max:255',
            'redacteur_id'=>'exists:users,id',
            'categorie_id'=>'exists:categories,id',
            // 'image'=>'required|image',
        ];
        $validator=Validator::make($request->all(),$ar);
        return $this->save($request,$validator,$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        if($article){
            $article->titre->delete();
            return response()->json([
                'status'=>true,
            ]);
        }
        return response()->json([
            'status'=>false,
        ]);
    }
    public function createf(Request $request){
        $article=new Article();
        $resume=new Resume();
        $titre="test";
        $article= new Article();
        return Inertia::render('Admin/ArticleCreateAdmin',[
            'article'=>$article,
            'resume'=>$resume,
            'titre'=>$titre,
            'article'=>$article
        ]);
    }


}
