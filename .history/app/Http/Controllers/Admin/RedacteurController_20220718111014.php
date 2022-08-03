<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use DataTables;

class RedacteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data($search=""){
        $redacteurs=User::where('role',User::ROLE_REDACTEUR)
                            ->where('name','like','%'.$search.'%')
                            ->orderBy('id','asc')->get();
        return DataTables::of($redacteurs)
            ->addColumn('date_f',function($redacteur){
                $date=($redacteur->created_at)?$redacteur->created_at->format('d-m-Y h:i'):'non defini';
                return $date;
            })
            ->rawColumns(['date_f'])
            ->with('status',true)
            ->with('message',"")
            ->toJson();
    }

    public function index(Request $request){
        return Inertia::render('Admin/Redacteur/PListe', [

        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return Inertia::render('Admin/Redacteur/PListe', [
            'redacteur'=>new User(),
        ]);
    }

    public function save(Request $request,$validator,$id){
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'messages'=>$validator->errors(),
            ]);
        }
        else{
            if($id!='0'){
                $redacteur=User::find($id);
            }
            else{
                $redacteur=new User();
            }
            $redacteur->name=$request->name;
            $redacteur->email=$request->email;
            $redacteur->password=$request->pwd;
            $redacteur->save();
            return response()->json([
                'status'=>true,
                'data'=>$redacteur,
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
