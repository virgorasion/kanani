<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockOpnameCtrl extends Controller
{
    public function index() {
        return view('Transaksi.StockOpname');
    }
}
