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

Route::get('/Laporan_absensi' , 'LaporanCtrl@index');