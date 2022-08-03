<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class AccueilController extends Controller
{
    public function index(Request $request){
        setlocale(LC_TIME, 'fr_FR');

        return Inertia::render('Accueil', [
            'canResetPassword' => Route::has('password.request'),
            'alaunes' => Titre::alaune(),
            'today' => utf8_encode(strftime('%A %d %B %Y, %H:%M'))
        ]);
    }

    public function detail(Request $request){
        return Inertia::render('Detail', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function enDirect(Request $request){
        return Inertia::render('EnDirect', [

        ]);
    }
}
