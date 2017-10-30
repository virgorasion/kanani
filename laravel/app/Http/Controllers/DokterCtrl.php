<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.dokter');
    }
}
