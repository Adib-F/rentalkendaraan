<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product097Controller extends Controller
{
    public function Product()
    {
        $product = [
            ['id' => 1, 'nama' => 'Laptop', 'harga' => 5000000],
            ['id' => 2, 'nama' => 'HP', 'harga' => 3000000],
            ['id' => 3, 'nama' => 'TV', 'harga' => 7000000],
        ];
        return view('list_product097', ['data' => $product]);
    }
}
