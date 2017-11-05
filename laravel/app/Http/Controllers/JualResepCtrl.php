<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualResepCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PenjualanResep');
    }
}
