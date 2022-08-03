<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleAdminController extends Controller
{
    public function index(Request $request){
            return Inertia::render('Admin/ArticleAdmin', [

            ]);
    }

    public function create(Request $request){
        $article=new Article();
        $resume=new Resume();
        $titre=new Titre();
        $redacteur= new Redacteur();
        return Inertia::render('Admin/ArticleCreateAdmin',[
            'article'=>$article
        ]);
    }
}
