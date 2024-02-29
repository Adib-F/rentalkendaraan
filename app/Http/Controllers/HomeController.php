<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mobil = [
            'Toyota',
            'Honda',
            'Nissan',
            'Mitsubishi',
            'Suzuki'
        ];

        return view('home', compact('mobil'));
    }

    public function contact()
    {
        return view('contact');
    }
}