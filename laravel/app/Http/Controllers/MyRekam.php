<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyRekam extends Controller
{
    public function index ()
    {
    	return view('form.my_rekam_medis');
    }
}
