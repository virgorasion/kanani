<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliObatCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PembelianObat');
    }

    public function show()
    {
        return view('Transaksi.Other_page.my_beli_obat');
    }
}
