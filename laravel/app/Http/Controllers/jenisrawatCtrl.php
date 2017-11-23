<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\jenisrawatModel;

class jenisrawatCtrl extends Controller
{
    public function index() {
        $table = 'App\Model\jenisrawatModel';
        $values = $table::select('jenis_rawat.*','jenis_periksa.nama_periksa as periksa')->join('jenis_periksa' ,'jenis_periksa.kd_periksa' ,'=' ,'jenis_rawat.kd_periksa')->get();
        $no=1;
        return view('Menu_Master.jenisrawat' ,compact('values' ,'no', 'views'));
    }

    public function view($id) {
        $table = 'App\Model\jenisrawatModel';
        $views = $table::select('jenis_rawat.*','jenis_periksa.nama_periksa')->join('jenis_periksa' ,'jenis_periksa.kd_periksa' ,'=' ,'jenis_rawat.kd_periksa')->where('jenis_rawat.kd_rawat' , $id)->get();
        //return view('Manu_Master.jenisrawat', compact('views'));
        
        return response()->json($views);
    }
}
