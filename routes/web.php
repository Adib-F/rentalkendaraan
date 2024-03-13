<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Images097Controller;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\Login097Controller;
use App\Http\Controllers\Register114Controller;
use App\Http\Controllers\ListBarang095Controller;
use App\Http\Controllers\ListBarang100Controller;
use App\Http\Controllers\ListBarang113Controller;


Route::get('/', [Login097Controller::class, 'showLogin']);
Route::get('/register114', [Register114Controller::class, 'index']);
Route::get('/ListBarang095', [ListBarang095Controller::class, 'index']);
Route::get('/Listbarang100', [ListBarang100Controller::class, 'index']);
Route::get('/ListBarang113', [ListBarang113Controller::class, 'index']);
Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/image','Images097');

Route::get('/ListBarang', [ListBarangController::class, 'index']);




