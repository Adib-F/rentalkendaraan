<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListMobil5Controller extends Controller
{
    public function getData()
    {
        $dataMobil = [
            ['id' => 1, 'nama mobil' => 'Marchedes', 'harga' => 100000000],
            ['id' => 2, 'nama mobil' => 'Avanza', 'harga' => 100000000],
            ['id' => 3, 'nama mobil' => 'Mini Cooper', 'harga' => 280000000],
            ['id' => 4, 'nama mobil' => 'Rush', 'harga' => 21000000],
            ['id' => 5, 'nama mobil' => 'Mclaren', 'harga' => 12300000000],
        ];
        return $dataMobil;
    }
    public function tampilkan(){
        $data = $this->getData();
        return view('listmobil5', compact('data'));
    }
}