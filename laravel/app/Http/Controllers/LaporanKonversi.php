<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKonversi extends Controller
{
    public function index () 
    {
    	return view('Laporan_master.Laporan_konversi_obat');
    }
}
