<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\rekam_medis_model;

class RekamMedis extends Controller
{
    public function index ()
    {
    	$table = 'App\Model\rekam_medis_model';
    	$values = $table::select('rekam_medis.*')->get();
    	$no = 1;
    	return view('form.rekam_medis' , compact('values','no','views'));
    }
    public function show ()
    {
    	return view('form.my_rekam_medis');
    }
}
