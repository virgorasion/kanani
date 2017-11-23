<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonversiCtrl extends Controller
{
    public function index()
    {
        return view('Transaksi.KonversiSatuanObat');
    }

    public function show()
    {
        return view('Transaksi.Other_page.my_konversi');
    }
}
