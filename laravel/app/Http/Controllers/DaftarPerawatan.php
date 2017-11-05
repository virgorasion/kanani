<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPerawatan extends Controller
{
    public function index() {

        return view('Transaksi.PendaftaranPerawatan');
    }
}
