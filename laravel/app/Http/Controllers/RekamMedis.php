<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedis extends Controller
{
    public function index ()
    {
    	return view('form.rekam_medis');
    }
}
