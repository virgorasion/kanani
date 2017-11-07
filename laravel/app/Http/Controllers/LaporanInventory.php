<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanInventory extends Controller
{
    public function index ()
    {
    	return view('Laporan_master.Laporan_invetori');
    }
}
