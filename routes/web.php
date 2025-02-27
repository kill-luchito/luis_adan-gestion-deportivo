<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\RegistrosController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});


Route::resource('home', homeController::class);

Route::resource('Registros', RegistrosController::class);