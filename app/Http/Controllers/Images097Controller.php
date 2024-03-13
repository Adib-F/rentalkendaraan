<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Images097Controller extends Controller
{
    public function showImages()
    {
        $images = [
            'fotoharimau097.jpg',
            'fotogajah097.jpg',
        ];

        return view('Images097', ['images' => $images]);
    }
}
