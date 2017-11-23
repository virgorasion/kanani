<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TulisResepCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PenulisanResep');
    }

    public function show()
    {
        return view('Transaksi.Other_page.my_penulisan_resep');
    }
}
