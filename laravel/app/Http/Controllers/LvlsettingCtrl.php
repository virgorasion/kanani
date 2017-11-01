<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class LvlsettingCtrl extends Controller
{
    public function index() {
        $settings = DB::table('menu_child')
            
            
            ->select('menu_child.*')->get();

        return view('Menu_Master.setting_level', compact('settings'));
    }
    public function get_menu_akses() {
        
    }
}
