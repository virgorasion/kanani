<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserfacialCtrl extends Controller
{
    public function index() {
        return view('Menu_Master.userfacial');
    }
}
