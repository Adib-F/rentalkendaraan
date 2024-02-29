<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'Muhammad Adib Fakhri Siregar',
        //     'pekerjaan' => 'Developer',
        // ];
        // return view('home')->with($data);

        $nama = "Muhammad Adib Fakhri Siregar";
        $pekerjaan = "Mahasiswa";
        return view('home', compact('nama','pekerjaan'));
    }
    public function contact()
    {
        return view('contact');
    }
}
