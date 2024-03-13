<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function index()
    {
        $barang = [
            ['id' => 1, 'nama' => 'Buku Tulis', 'harga' => 10000],
            ['id' => 2, 'nama' => 'Buku Gambar', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Buku Komik', 'harga' => 30000],
        ];
        return view('ListBarang', ['barang' => $barang]);
    }
}
