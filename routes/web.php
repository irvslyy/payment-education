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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'FirewallController@index')->name('home');

//siswa
Route::get('/siswa','SiswaController@index')->name('siswa.index');
Route::get('/siswa/create','SiswaController@create')->name('siswa.create');
Route::delete('/siswa/{id}','SiswaController@destroy')->name('siswa.delete');
Route::post('/siswa/create','SiswaController@store')->name('siswa.post');
Route::get('/siswa/kelas/{id}','SiswaController@filter')->name('siswa.filter');
Route::get('/cari','SiswaController@search')->name('search');

//petugas
Route::get('/petugas','PetugasController@index')->name('petugas.index');

//pembayaran
Route::get('/pembayaran/bulanan','PembayaranController@index')->name('pembayaran.index');
Route::post('/pembayaran/store', 'PembayaranController@submitPembayaran')->name('pembayaran.store');

//history 
Route::get('/history','HistoryController@index')->name('history.index');

//trash
Route::get('/trash','TrashController@index')->name('trash.index');

//Route users
Route::get('/users/management','UserController@index')->name('user.index');

//report chart
Route::get('/chart/report','ChartController@index')->name('chart.index');

//setting
Route::get('/setting','SettingController@index')->name('setting.index');

//transaksi
Route::get('/transaksi','TransactionController@index')->name('transaksi.index');


