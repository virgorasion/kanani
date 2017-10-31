<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.pegawai');
    }
}
