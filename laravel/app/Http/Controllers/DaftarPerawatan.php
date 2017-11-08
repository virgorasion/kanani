<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPerawatan extends Controller
{
    public function index() {

        return view('Transaksi.PendaftaranPerawatan');
    }

    public function show()
    {
        return view('Transaksi.Other_page.my_daftar_perawatan_wajah');
    }
}
