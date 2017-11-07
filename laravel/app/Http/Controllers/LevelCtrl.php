<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelCtrl extends Controller
{
    public function index(){
        return view('Menu_Master.level');
    }

    public function setting() {
        return view('Menu_Master.setting_level');
    }
}
