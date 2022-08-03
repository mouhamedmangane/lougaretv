<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Inertia\Inertia;

use DataTables;

class CategorieController extends Controller
{



    public function data($search=""){
        $categories=Categorie::where('id','like','%'.$search.'%')->get();
        return DataTables::of($categories)
            ->addColumn('date',function($categorie){
                $date=($categorie->created_at)?$categorie->created_at->format('d-m-Y h:i'):'non defini';
                return $date;
            })
            ->rawColumns(['date'])
            ->with('status',true)
            ->with('message',"")
            ->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categorie::all();
        return Inertia::render('Admin/Categorie/PListe', [
            'list'=>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Categorie/PCreate', [
            'categorie'=>new Categorie
        ]);
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
            'id'=>'required',
            'couleur_txt'=>'max:50',
            'couleur_fond'=>'max:50'
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'messages'=>$validator->errors(),
            ]);
        }
        else{
            $categorie=new Categorie();
            $categorie->id=$request->id;
            $categorie->couleur_txt=$request->couleur_txt;
            $categorie->couleur_fond=$request->couleur_fond;
            $categorie->save();
            return response()->json([
                'status'=>true,
                'data'=>$categorie,
            ]);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
