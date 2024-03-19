<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrasiController extends Controller
{
    public function index()
    {
        return view('register');
    }
}
