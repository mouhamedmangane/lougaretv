<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use IntlDateFormatter;

class AccueilController extends Controller
{
    public function index(Request $request){
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL,
                     'Africa/Dakar',IntlDateFormatter::GREGORIAN,'dd eeee MMMM yyyy');

        return Inertia::render('Accueil', [
            'canResetPassword' => Route::has('password.request'),
            'alaunes' => Titre::alaune(),
            'today' => $formatter->format(time())
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
