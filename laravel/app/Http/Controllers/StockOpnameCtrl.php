<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockOpnameCtrl extends Controller
{
    public function index() {
        return view('Transaksi.StockOpname');
    }

    public function show()
    {
        return view('Transaksi.Other_page.my_stock_opname');
    }
}
