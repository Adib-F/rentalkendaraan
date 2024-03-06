<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListMobilController;
use App\Http\Controllers\ListBarang095Controller;

Route::get('/login', [LoginController::class, 'loginForm']);
Route::get('/', function () {
    return view('login');
});

Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list_mobil', [ListMobilController::class, 'tampilkan']);
Route::get('/listbarang095', [ListBarang095Controller::class, 'listbarang095']);


