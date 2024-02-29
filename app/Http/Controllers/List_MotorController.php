<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List_MotorController extends Controller
{
    public function index()
    {
        $motor = [
            'Toyota',
            'Honda',
            'Yamaha',
            'Suzuki'
        ];

        return view('list_motor', compact('motor'));
    }

    public function contact()
    {
        return view('motor');
    }
}