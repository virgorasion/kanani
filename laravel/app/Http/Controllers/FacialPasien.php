<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacialPasien extends Controller
{
    public function index ()
    {
    	return view('form.facial_pasien');
    }
    public function show ()
    {
    	return view('form.my_facial');
    }
}
