<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\sesionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('login', [sesionController::class, 'create'])->name('inicio_sesion.sesion');
Route::post('login/s', [sesionController::class,'store'])->name('inicio_sesion.registro');
