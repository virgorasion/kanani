<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonversiCtrl extends Controller
{
    public function index() {
        return view('Transaksi.KonversiSatuanObat');
    }
}
