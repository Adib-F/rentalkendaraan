<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController100 extends Controller
{
    public function getData(){
        $dataProduk = [
            ['id' => 1, 'produk' => 'Mobil'],
            ['id' => 2, 'produk' => 'Motor'],
            ['id' => 3, 'produk' => 'PickUp'],
            ['id' => 4, 'produk' => 'Truck'],
        ];
        return $dataProduk;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('list_product100', compact('data'));
    }
}