<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login097Controller;
use App\Http\Controllers\Product097Controller;


Route::get('/login', [Login097Controller::class, 'showLogin']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/image','Images097');

Route::get('/', [Product097Controller::class, 'Product']);






