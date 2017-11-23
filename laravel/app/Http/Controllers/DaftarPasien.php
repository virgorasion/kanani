<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\daftar_pasien_model;

class DaftarPasien extends Controller
{
    public function index() 
    {
    	$table = 'App\Model\daftar_pasien_model';
    	$values = $table::select('pasien.*')->get();
    	$no = 1;
    	return view('form.daftar_pasien' , compact('values' , 'no' , 'views'));
    }
    public function show()
    {
    	return view('form.my_pasien');
    }
}
