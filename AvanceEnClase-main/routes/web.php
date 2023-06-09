<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropuestasController;

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
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/propuestas',[PropuestasController::class,'propuestas'])->name('propuestas.propuestas');
Route::post('/propuestas',[PropuestasController::class,'store'])->name('propuestas.store');

Route::get('/estadopropuestas',[EstadoProController::class,'estadopro'])->name('estadopropuestas.estadopro');
Route::post('/estadopropuestas',[PropuestasController::class,'store'])->name('estadopropuestas.store');
