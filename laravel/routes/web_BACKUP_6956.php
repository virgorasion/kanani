<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/view_dokter' ,'DokterCtrl@index');
<<<<<<< HEAD
//Start Form
Route::get('/view_daftar_pasien' , 'DaftarPasien@index');
Route::get('/view_facial_pasien' , 'FacialPasien@index');
Route::get('/view_rekam_medis' , 'RekamMedis@index');
//End Form
//Start Laporan Nathan
Route::get('/view_lap_foto' , 'LaporanFoto@index');
Route::get('/lap_stock_opname' , 'LaporanOpname@index');
Route::get('/lap_konversi' , 'LaporanKonversi@index');
Route::get('/view_inventory_resep' , 'LaporanResep@index');
//End Laporan Nathan
=======
Route::get('/view_jenisrawat' ,'jenisrawatCtrl@index');
Route::get('/view_obat' ,'ObatCtrl@index');
Route::get('/view_pegawai' ,'PegawaiCtrl@index');
Route::get('/view_peralatan' ,'PeralatanCtrl@index');
Route::get('/view_periksa' ,'PeriksaCtrl@index');
Route::get('/view_supplier' ,'SupplierCtrl@index');
Route::get('/view_userfacial' ,'UserfacialCtrl@index');
Route::get('/view_level' ,'LevelCtrl@index');
Route::get('/view_level/setting' ,'LvlsettingCtrl@index');
Route::get('/view_satuan' ,'SatuanCtrl@index');

>>>>>>> e4f670f8ed50fbb12bf80b1b50fc7aaa5c82ca9e
Route::get('/Laporan_absensi' , 'LaporanCtrl@index');