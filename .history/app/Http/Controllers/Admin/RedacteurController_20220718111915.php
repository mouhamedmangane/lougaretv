<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Validation\Rule;

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

    public function save(Request $request,$validator,$id=0){
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
            $redacteur->role=User::ROLE_REDACTEUR;
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
        $validator=Validator::make($request->all(),[
            'name'=>'max-100|unique:users,name',
            'email'=>'max-100|unique:users,email',
            'pwd'=>'max:50'
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
            'name'=>['max-100',Rule::unique('users','name')->where('id','<>',$request->id)],
            'name'=>['max-100',Rule::unique('users','email')->where('id','<>',$request->id)],
            'pwd'=>'max:50'
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
        //
    }
}
