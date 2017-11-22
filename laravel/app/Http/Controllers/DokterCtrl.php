<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\dokter;

class DokterCtrl extends Controller
{
    private $model;

    public $dokter;

    public function __construct(){
        $this->model = new ModelConfig;

        $this->dokter = $this->model->dokter;
    }

    public function index() {
        $dokters = dokter::all();
        //dd($dokters);
        $no=1;
        return view('Menu_Master.dokter' ,compact('dokters','no'));
    }

    public function store(){
        
        $store = new dokter;

        $store->kode = $this->model->dokter->genKode();
        $store->nama = request()->add_nama_dokter;
        $store->alamat = request()->add_alamat;
        $store->kota = request()->add_kota;
        $store->hp = request()->add_no_hp;
        $store->telp = request()->add_telepon;
        $store->ambilsidik = request()->add_ambil_sidik;

        $store->save();
        return redirect('/view_dokter');
    }

    public function delete($id){
        $delete = new dokter;

        $delete::where('kode', $id)->delete();

        return redirect('/view_dokter');
    }

    public function view($id){
        $view = dokter::select('dokter.*')->where('kode', $id)->get();
        return response()->json($view);
    }

    public function update(){
        $update = dokter::where('kode', request()->editID)->update([
            'nama' => request()->editDokter,
            'alamat' => request()->editAlamat,
            'kota' => request()->editKota,
            'hp' => request()->editHP,
            'telp' => request()->editTelp,
            'ambilsidik' => request()->editSidik
        ]);
        
        return redirect('/view_dokter');
    }
}
