<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanFoto extends Controller
{
    public function index ()
    {
    	return view('laporan_master.laporan_history_foto');
    }
}
