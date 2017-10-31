<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriksaCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.periksa');
    }
}
