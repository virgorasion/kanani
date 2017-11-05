<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualObatCtrl extends Controller
{
    public function index() {
        return view('Transaksi.PenjualanObat');
    }
}
