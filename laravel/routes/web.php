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
    return view('welcome');
});

Route::get('/view_dokter' ,'DokterCtrl@index');
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
Route::get('/Laporan_absensi' , 'LaporanCtrl@index');