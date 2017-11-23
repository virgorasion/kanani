<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\facial_pasien_model;

class FacialPasien extends Controller
{
    public function index ()
    {
    	$table = 'App\Model\facial_pasien_model';
    	$values = $table::select('facial.*','pasien.kd_pasien','pasien.nama','pegawai.nama as nama_pegawai')->join('pasien','pasien.kd_pasien','=','facial.kd_pasien')->join('pegawai','pegawai.kd_barcode','=','facial.kode_perawat')->get();
    	$no = 1;
    	return view('form.facial_pasien' , compact('values','no','views'));
    }
    public function show ()
    {
    	return view('form.my_facial');
    }
}
