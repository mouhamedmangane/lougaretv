<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ImageFactory;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Redacteur;
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
        $titres=Titre::where('txt','like','%'.$search.'%')
        ->offset($request->page*$request->limit)
        ->limit($request->limit)
                            ->orderBy('created_at','asc')->get();
        return DataTables::of($titres)
            ->addColumn('date_f',function($article){
                $date=($article->created_at)?$article->created_at->format('d-m-Y h:i'):'non defini';
                return $date;
            })
            ->addColumn('article',function($titre){
                return $titre->article;
            })
            ->rawColumns(['date_f'])
            ->with('status',true)
            ->with('message',"")
            ->pagi
            ->toJson();
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
        //dd($request->all());
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
                    $titre= new Article();
                    $resume= new Resume();
                }
                //titre
                $titre->txt=$request->titre;
                $titre->save();
                //resume
                $resume->txt=$request->resume;
                $resume->save();
                //article
                $article->categorie_id=$request->categorie_id;
                $article->redacteur_id=$request->redacteur_id;
                $article->titre_id=$titre->id;
                $article->resume_id=$resume->id;
                $article->save();
                ImageFactory::store($request,$article,'photo','images/articles',$article->id,'image');
                $article->save();
                DB::commit();


                return response()->json([
                    'status'=>true,
                    'data'=>$article,
                ]);

            } catch (\Throwable $th) {
                //throw $th;
                DB::rollback();
                return response()->json([
                    'status'=>false,
                    'message'=>'',
                ]);
            }



        }
    }


    public function saveElements(Request $request,$id){
        Storage::put('articles/'.$id.'.json', $request->elements));
        foreach ($request->articles_files as $key=> $file) {
            $name=$key.".".$file->extension();
            $file->move("images/articles/liste/$id/",$name);
        }
        $test=Storage::get('articles/'.$id.'.json'));
        dd(json_decode($test));

        1/0;
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
            'titre'=>'required|max:100',
            'resume'=>'required|max:100',
            // 'redacteur_id'=>'exists:redacteurs,id',
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
        $article->old_id=$article->id;
        return Inertia::render('Admin/Article/PCreate', [
            'article'=>$article,
            "mode"=>'edit'

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
            'id'=>'exists:redacteurs,id',
            'titre'=>'required|max:100',
            'resume'=>'required|max:100',
            'redacteur_id'=>'exists:redacteurs,id',
            'categorie_id'=>'exists:categories,id',
            'image'=>'required|image',
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
            $article->delete();
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
