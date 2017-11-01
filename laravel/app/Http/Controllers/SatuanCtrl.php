<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuanCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.satuan');
    }
}
