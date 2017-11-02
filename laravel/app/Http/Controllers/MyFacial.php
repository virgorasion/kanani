<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFacial extends Controller
{
    public function index ()
    {
    	return view('form.my_facial');
    }
}
