<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TulisResepCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PenulisanResep');
    }
}
