<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Admin\ArticleAdminController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\RedacteurController;
use App\Models\Redacteur;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('a',function(){
    echo'oooo';
    Artisan::call("storage:link");

});
Route::get('/',[AccueilController::class,'index']);
Route::get('/detail',[AccueilController::class,'detail']);
Route::get('/en_direct',[AccueilController::class,'enDirect']);



Route::get('/lougare_npl/articles',[ArticleAdminController::class,'index']);
Route::get('/lougare_npl/articles/create',[ArticleAdminController::class,'create']);
Route::post('/lougare_npl/articles/store',[ArticleAdminController::class,'store']);

Route::get("/lougare_npl/article/data/{search?}",[ArticleAdminController::class,'data'] );
Route::resource("/lougare_npl/article",ArticleAdminController::class );

Route::get("/lougare_npl/categorie/data/{search?}",[CategorieController::class,'data'] );
Route::resource("/lougare_npl/categorie",CategorieController::class );

Route::get("/lougare_npl/redacteur/data/{search?}",[RedacteurController::class,'data'] );
Route::resource("/lougare_npl/redacteur",RedacteurController::class );

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';

