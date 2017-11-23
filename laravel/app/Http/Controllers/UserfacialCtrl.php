<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\master_user_facial_model;

class UserfacialCtrl extends Controller
{
    public function index ()
    {
    	$table = 'App\Model\master_user_facial_model';
    	$values = $table::select('userfacial.*','level.level_id','level.level_name')->join('level','level.level_id','=','userfacial.hak')->get();
        return view('Menu_Master.userfacial',compact('values','no','views'));
    }
}
