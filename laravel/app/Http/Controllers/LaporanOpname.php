<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanOpname extends Controller
{
    public function index ()
    {
    	return view('laporan_master.laporan_stock_opname');
    }
}
