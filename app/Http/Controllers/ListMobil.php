<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListMobil extends Controller
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

        return view('list_mobil', compact('mobil'));
    }

    public function contact()
    {
        return view('mobil');
    }
}