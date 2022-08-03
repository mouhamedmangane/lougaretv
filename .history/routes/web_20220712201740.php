<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Admin\ArticleAdminController;
use Illuminate\Foundation\Application;
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

Route::get('/',[AccueilController::class,'index']);
Route::get('/detail',[AccueilController::class,'detail']);
Route::get('/lougare_npl/article',[ArticleAdminController::class,'index']);
Route::get('/lougare_npl/article/create',[ArticleAdminController::class,'create']);
Route::post('/lougare_npl/article/save',[ArticleAdminController::class,'store']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';