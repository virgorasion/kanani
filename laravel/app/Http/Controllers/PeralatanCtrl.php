<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeralatanCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.peralatan');
    }
}
