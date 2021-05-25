<?php

use App\Http\Controllers\EntrarController;
use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TemporadasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
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
Route::get('/series', [SeriesController::class, 'index'])->name('listar_series');
Route::get('/series/criar', [SeriesController::class, 'create'])->name('form_criar_serie')->middleware('autenticador');
Route::post('/series/criar', [SeriesController::class, 'store'])->middleware('autenticador');
Route::post('/series/{serieId}/editaNome', [SeriesController::class, 'editaNome'])->middleware('autenticador');
Route::delete('/series/{id}', [SeriesController::class,'destroy'])->middleware('autenticador');
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);
Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);
Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir'])->middleware('autenticador');
Route::get('/entrar', [EntrarController::class ,'index']);
Route::post('/entrar', [EntrarController::class ,'entrar']);
Route::get('/registrar', [RegistroController::class ,'create']);
Route::post('/registrar', [RegistroController::class ,'store']);

Route::get('/sair', function () {
    Auth::logout();
    return redirect('/entrar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
