<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Redacteur;
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
        $artuckes=Titre::where('txt','like','%'.$search.'%')
                            ->orderBy('created_at','asc')->get();
        return DataTables::of($artuckes)
            ->addColumn('date_f',function($artucke){
                $date=($artucke->created_at)?$artucke->created_at->format('d-m-Y h:i'):'non defini';
                return $date;
            })
            ->rawColumns(['date_f'])
            ->with('status',true)
            ->with('message',"")
            ->toJson();
    }




    public function create()
    {

        return Inertia::render('Admin/Redacteur/PCreate', [
            'artucke'=>new Article,
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
            if($id!=0){
                $artucke=Article::find($id);
            }
            else{
                $artucke=new Article();
            }
            $artucke->name=$request->name;
            $artucke->email=$request->email;
            if($request->filled('pwd')) {
                $artucke->password=Hash::make($request->pwd);
            }
            $artucke->role=Article::ROLE_REDACTEUR;
            $artucke->save();
            ImageFactory::store($request,$artucke,'photo','images/artuckes',$artucke->id,'image');
            $artucke->save();

            return response()->json([
                'status'=>true,
                'data'=>$artucke,
            ]);
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
            'name'=>'required|max:100|unique:users,name',
            'email'=>'required|email:rfc,dns|unique:users,email',
            'phto'=>'image',
            'pwd'=>'max:50|confirmed|required'
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
        $artucke=Article::findOrFail($id);
        $artucke->old_id=$artucke->id;
        return Inertia::render('Admin/Redacteur/PCreate', [
            'artucke'=>$artucke,
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
        $artucke=Article::find($id);
        if($artucke){
            $artucke->delete();
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
        $artucke= new Redacteur();
        return Inertia::render('Admin/ArticleCreateAdmin',[
            'article'=>$article,
            'resume'=>$resume,
            'titre'=>$titre,
            'artucke'=>$artucke
        ]);
    }


}
