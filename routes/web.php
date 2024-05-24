<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\myspacecontroller;
use App\Http\Controllers\RegistroController;

Route::get('/', function(){
    return view('auth.login');
});

Route:: resource('pacientes', 'App\Http\Controllers\PacienteController');
/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');    
    Route::get('cursos/{curso}/{categoria?}', 'show');
});

Route::get('/login', LoginController::class);
// Route::get('cursos/{variable}', function($variable) {
//     return "Bienvenido al curso: $variable";
// });
Route::get('/myspace', [myspaceController::class,'home']);
Route::post('/myspace', [myspacecontroller::class,'store'])->name('myspace.store');

Route::get('/registro', [RegistroController::class,'index']);
Route::post('/registro', [RegistroController::class,'store'])->name('registro.store');
*/

/* Route::middleware(['auth:sanctum','verified'])->get('/dash', function () {
        return view('dash.index');
    })->name('dash'); */
Route::get('/dash','App\Http\Controllers\DashboardController@index');

Route::get('/dash/crud', function () {
    return view('crud.index');
});

Route::get('/dash/crud/create', function () {
    return view('crud.create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
