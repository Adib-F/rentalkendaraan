<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List_bahanController extends Controller
{
    public function getData()
    {
    $dataBarang = [
        ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' =>  15000],
        ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' =>  20000],
        ['id' => 3, 'nama' => 'Baygon Cair', 'harga' => 13500],
        ['id' => 4, 'nama' => 'Penyedap Rayco', 'harga' =>  3200],
        ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
    ];
    return $dataBarang;
}
public function tampilkan (){
    $data = $this -> getData ();
        return view('List_bahan', compact('data'));
    }
}
