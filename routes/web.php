<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\myspacecontroller;
use App\Http\Controllers\RegistroController;

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
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

