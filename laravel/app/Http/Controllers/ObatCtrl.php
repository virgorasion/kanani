<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.obat');
    }
}
