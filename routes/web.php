<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\sesionController;
use Illuminate\Support\Facades\Route;

Route::get('/',homeController::class);
Route ::get('sesion/',[sesionController::class,'create'])->name('inicio_sesion.sesion');
