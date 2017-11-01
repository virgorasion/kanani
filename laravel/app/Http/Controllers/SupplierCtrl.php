<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.supplier');
    }
}
