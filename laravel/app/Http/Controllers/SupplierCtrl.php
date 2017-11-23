<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\master_supplier_model;

class SupplierCtrl extends Controller
{
    public function index() {
    	$table = 'App\Model\master_supplier_model';
    	$values = $table::select('supplier.*')->get();
    	$no = 1;
        return view('Menu_Master.supplier',compact('values','no','views'));
    }
}
