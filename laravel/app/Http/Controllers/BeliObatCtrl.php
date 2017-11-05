<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliObatCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PembelianObat');
    }
}
