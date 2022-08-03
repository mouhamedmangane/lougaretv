<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ImageFactory;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Resume;
use App\Models\Titre;
use Illuminate\Http\Request;
use Inertia\Inertia;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ArticleAdminController extends Controller
{
    public function data($search=""){
        $titres=Titre::where('txt','like','%'.$search.'%')
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




    public function create()
    {

        return Inertia::render('Admin/Article/PCreate', [
            'article'=>new Article,
            "mode"=>'create'
        ]);
    }

    public function save(Request $request,$validator,$id=0){
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'messages'=>$validator->errors(),
            ]);
        }
        else{
            DB::beginTransaction();
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
            'redacteur_id'=>'exists:redacteurs,id',
            'categorie_id'=>'exists:categories,id',
            'image'=>'image',
            'type'=>'image',
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
            'id'=>'exists:users,id',
            'name'=>['required','max:100',Rule::unique('users','name')->where('id','<>',$request->id)],
            'email'=>['required','email:rfc,dns',Rule::unique('users','email')->where('id','<>',$request->id)],
            'phto'=>'image',
            'pwd'=>'max:50|confirmed'
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
