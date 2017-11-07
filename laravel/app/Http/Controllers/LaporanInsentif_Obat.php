<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanInsentif_Obat extends Controller
{
    public function index ()
    {
    	return view('Laporan_master.Laporan_insentif_obat');
    }
}
