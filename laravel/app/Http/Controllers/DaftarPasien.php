<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPasien extends Controller
{
    public function index() 
    {
    	return view('form.daftar_pasien');
    }
    public function show()
    {
    	return view('form.my_pasien');
    }
}
