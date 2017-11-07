<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanResep extends Controller
{
    public function index ()
    {
    	return view('Laporan_master.Laporan_inventory_resep');
    }
    public function show ()
    {
    	return view('Laporan_master.print.lap_inventory_resep_print');
    }
}
