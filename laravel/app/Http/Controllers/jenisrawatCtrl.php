<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jenisrawatCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.jenisrawat');
    }
}
