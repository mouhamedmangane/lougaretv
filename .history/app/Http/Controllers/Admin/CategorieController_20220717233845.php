<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Inertia\Inertia;

class CategorieController extends Controller
{
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
            'categorie'=>new Categorie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
