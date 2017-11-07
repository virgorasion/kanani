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

//Routes Master
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

//start form nathan
Route::get('/view_daftar_pasien' , 'DaftarPasien@index');
Route::get('/view_daftar_pasien/add' , 'DaftarPasien@show');
Route::get('/view_facial_pasien' , 'FacialPasien@index');
Route::get('/view_facial_pasien/add' , 'FacialPasien@show');
Route::get('/view_rekam_medis' , 'RekamMedis@index');
<<<<<<< HEAD
Route::get('/view_rekam_medis/add' , 'RekamMedis@show');
//end nathan
Route::get('/view_absensi' , 'LaporanCtrl@index');
Route::get('/view_inventory' , 'LaporanInventory@index');
Route::get('/lap_pembelian_obat' , 'LaporanBeliObat@index');
Route::get('/lap_insentif_obat' , 'LaporanInsentif_Obat@index');
Route::get('/lap_insentif' , 'LaporanInsentif@index');
Route::get('/lap_perawatan' , 'LaporanPerawatan@index');
Route::get('/lap_penjualan' , 'LaporanPenjualan@index');
Route::get('/lap_penjualan_detail' , 'LaporanPenjualan_detail@index');
Route::get('/lap_rawat_jual' , 'LaporanPerawatan@index');
=======
//end nathan

//Routes Transaksi
Route::get('/view_daftar_perawatan' ,'DaftarPerawatan@index');
Route::get('/view_beli_obat' ,'BeliObatCtrl@index');
Route::get('/view_jual_obat' ,'JualObatCtrl@index');
Route::get('/view_stock_opname' ,'StockOpnameCtrl@index');
Route::get('/view_penjualan_resep' ,'JualResepCtrl@index');
Route::get('/view_penulisan_resep' ,'TulisResepCtrl@index');
Route::get('/view_konversi' ,'KonversiCtrl@index');

//Routes Laporan
Route::get('/Laporan_absensi' , 'LaporanCtrl@index');
>>>>>>> 7f292a71b9b828ffb22ed2e811c38ebe5758d4b7
Route::get('/view_lap_foto' , 'LaporanFoto@index');
Route::get('/lap_stock_opname' , 'LaporanOpname@index');
Route::get('/lap_stock_opname/print' , 'LaporanOpname@show');
Route::get('/lap_konversi' , 'LaporanKonversi@index');
<<<<<<< HEAD
Route::get('/lap_konversi/print' , 'LaporanKonversi@show');
Route::get('/view_inventory_resep' , 'LaporanResep@index');
Route::get('/view_inventory_resep/print' , 'LaporanResep@show');
=======
Route::get('/view_inventory_resep' , 'LaporanResep@index');
>>>>>>> 7f292a71b9b828ffb22ed2e811c38ebe5758d4b7
