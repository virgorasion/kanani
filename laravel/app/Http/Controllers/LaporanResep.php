<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanResep extends Controller
{
    public function index ()
    {
    	return view('Laporan_master.Laporan_inventory_resep');
    }
}
