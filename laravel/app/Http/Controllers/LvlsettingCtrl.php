<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LvlsettingCtrl extends Controller
{
    public function index() {

        return view('Menu_Master.Setting_level');
    }

}
