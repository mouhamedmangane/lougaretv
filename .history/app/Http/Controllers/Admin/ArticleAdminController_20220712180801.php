<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleAdminController extends Controller
{
    public function index(){
        public function index(Request $request){
            return Inertia::render('Admin/ArticleAdmin', [

            ]);
        }
    }
}
