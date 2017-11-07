<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\dokter;

class DokterCtrl extends Controller
{
    public function index() {
        $dokters = dokter::all();
        //dd($dokters);
        $no=1;
        return view('Menu_Master.dokter' ,compact('dokters','no'));
    }
}
