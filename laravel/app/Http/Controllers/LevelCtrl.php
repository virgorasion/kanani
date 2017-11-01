<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelCtrl extends Controller
{
    public function index(){
        return view('Menu_Master.level');
    }

    public function id($id) {
        $id = rand(1, 999);
        return $id;
    }
}
