<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List_MotorController extends Controller
{
    public function index()
    {
        $motor = [
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