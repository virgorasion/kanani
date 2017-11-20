<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\jenisrawatModel;
use App\Model\jenisperiksaModel;

class jenisrawatCtrl extends Controller
{
    public function index() {
        $table = 'App\Model\jenisrawatModel';
        $values = $table::select('jenis_rawat.*','jenis_periksa.nama_periksa as periksa')->join('jenis_periksa' ,'jenis_periksa.kd_periksa' ,'=' ,'jenis_rawat.kd_periksa')->get();
        $table1 = 'App\Model\jenisperiksaModel'; //Jenis Periksa
        $selects = $table1::select('jenis_periksa.kd_periksa','jenis_periksa.nama_periksa')->get();
        //dd($values);
        $no=1;

        return view('Menu_Master.jenisrawat' ,compact('values' ,'no','selects'));
    }

    public function selPeriksa() {
        $table = 'App\Model\jenisperiksaModel'; //Jenis Periksa
        $selects = $table::select('jenis_periksa.kd_periksa','jenis_periksa.nama_periksa')->get();
        //$asd = $table::select('jenis_rawat.*','jenis_periksa.nama_periksa as periksa')->join('jenis_periksa' ,'jenis_periksa.kd_periksa' ,'=' ,'jenis_rawat.kd_periksa')->get();

        return response()->json($selects);
    }

    public function selStatus() {
        $table = 'App\Model\jenisrawatModel';
        $selStatus = $table::select('status')->get();

        return response()->json($selStatus);
    }

    public function view($id) {
        $table = 'App\Model\jenisrawatModel';
        $views = $table::select('jenis_rawat.*','jenis_periksa.nama_periksa')->join('jenis_periksa' ,'jenis_periksa.kd_periksa' ,'=' ,'jenis_rawat.kd_periksa')->where('jenis_rawat.kd_rawat' , $id)->get();
        //return view('Manu_Master.jenisrawat', compact('views'));
        
        return response()->json($views);
    }

    public function update(){
    $table = new jenisrawatModel;   
    $table::where('kd_rawat' ,request()->kode_jenis)->update([
    'nama_rawat'     => request()->nama_rawat,
    'kd_periksa'     => request()->Jenis_periksa,
    'status'         => request()->Status,
    'status_dokter'  => request()->Status_dokter,
    'biaya'          => request()->biaya,
    'ins_dokter'     => request()->ins_dokter,
    'ins_perawat'    => request()->ins_perawat,
    'ins_beautician' => request()->ins_beautician
    ]);
    
    return redirect('/view_jenisrawat');
    }

    public function store(){
        $table = new jenisrawatModel;
        dd(request()->all());
        $table->kd_rawat = $request()->add_kd_jenis;
    }
}
  