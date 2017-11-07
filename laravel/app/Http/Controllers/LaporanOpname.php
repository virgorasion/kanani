<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanOpname extends Controller
{
    public function index ()
    {
    	return view('laporan_master.laporan_stock_opname');
    }
    public function show ()
    {
    	return view('Laporan_master.print.lap_stock_opname_print');
    }
}
