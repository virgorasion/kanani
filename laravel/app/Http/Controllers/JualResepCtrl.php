<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualResepCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PenjualanResep');
    }
    
    public function show()
    {
        return view('Transaksi.Other_page.my_jual_obat');
    }
}
