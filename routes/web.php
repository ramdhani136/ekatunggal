<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','pegawaiController@index');
Route::get('/tambah','pegawaiController@tambah');
Route::post('/store','pegawaiController@store');
Route::get('/edit/{id}','pegawaiController@edit');
Route::post('update','pegawaiController@update');
Route::get('/hapus/{id}','pegawaiController@hapus');

Route::get('/dosen','dosenController@index');
Route::get('/dosen/create','dosenController@create');
Route::post('/dosen/store','dosenController@store');
Route::get('/dosen/edit/{id}','dosenController@edit');
Route::post('dosen/update','dosenController@update');
Route::get('/dosen/hapus/{id}','dosenController@destroy');
Route::get('/dosen/cari','dosenController@cari');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang','barangController@index');
Route::get('/barang/tambah','barangController@create');
Route::post('/barang/store','barangController@store');
Route::get('/barang/edit/{id}','barangController@edit');
Route::post('/barang/update','barangController@update');
Route::get('/barang/hapus/{id}','barangController@destroy');
Route::get('/barang/cari','barangController@cari');


