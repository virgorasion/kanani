<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class LvlsettingCtrl extends Controller
{
    public function index() {
        
        return view('Menu_Master.setting_level');
    }
    public function get_menu_akses() {
        
    }
}
