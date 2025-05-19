<?php

use App\Http\Controllers\autentikasicontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});


route::get('/index',[BukuController::class,'index']);
route::get('/login',[autentikasicontroller::class,'index']);