<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Listbarang097;
use App\Http\Controllers\Login097Controller;
use App\Http\Controllers\Register114Controller;
use App\Http\Controllers\ListBarang095Controller;
use App\Http\Controllers\ListBarang100Controller;
use App\Http\Controllers\ListBarang113Controller;

Route::get('/Listbarang097', [Listbarang097::class, 'tampilkan']);

Route::get('', [Register114Controller::class, 'index']);
Route::get('/Login097', [Login097Controller::class, 'index']);
Route::get('/ListBarang095', [ListBarang095Controller::class, 'index']);
Route::get('/Listbarang100', [ListBarang100Controller::class, 'index']);
Route::get('/ListBarang113', [ListBarang113Controller::class, 'index']);
