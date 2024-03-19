<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingController extends Controller
{
    public function showSettingsForm()
    {
        // Logika untuk menampilkan formulir pengaturan profil
        return view('settings');
    }

    public function updateProfile(Request $request)
    {
        // Logika untuk memproses pembaruan profil
        // Ambil data dari $request->input('key')
        // Lakukan validasi jika diperlukan
        // Simpan data ke database

        // Redirect kembali ke halaman pengaturan dengan pesan sukses atau pesan error
        return redirect()->route('settings')->with('status', 'Profile updated successfully!');
    }
}
