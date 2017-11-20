<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualObatCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PenjualanObat');
    }

    public function show()
    {
        return view('Transaksi.Other_page.my_jual_obat');
    }
}
