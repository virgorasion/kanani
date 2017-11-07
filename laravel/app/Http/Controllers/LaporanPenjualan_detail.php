<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualan_detail extends Controller
{
    public function index ()
    {
    	return view('Laporan_master.Laporan_penjualan_detail');
    }
}
