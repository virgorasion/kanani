<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPerawatan extends Controller
{
    public function index ()
    {
    	return view('Laporan_master.Laporan_perawatan');
    }
}
