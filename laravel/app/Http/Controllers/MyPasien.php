<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPasien extends Controller
{
    public function index () 
    {
    	return view('form.my_pasien');
    }
}
