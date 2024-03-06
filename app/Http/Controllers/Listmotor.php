<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Listmotor extends Controller
{
    public function getData()
    {
    $dataBarang = [
        ['id' => 1, 'nama' => 'Motor Beat', 'harga' =>  18000000],
        ['id' => 2, 'nama' => 'Motor Nmax 155', 'harga' =>  31925000],
        ['id' => 3, 'nama' => 'Motor GSX - S150', 'harga' => 31450000],
    ];
    return $dataBarang;
}
public function tampilkan (){
    $data = $this -> getData ();
        return view('Listmotor', compact('data'));
    }
}
