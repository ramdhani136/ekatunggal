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

Route::get('/mahasiswa','mahasiswaController@index');
Route::get('/mahasiswa/tambah','mahasiswaController@create');
Route::post('/mahasiswa/store','mahasiswaController@store');
Route::get('/mahasiswa/edit/{id}','mahasiswaController@edit');
Route::put('/mahasiswa/update/{id}','mahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','mahasiswaController@destroy');

Route::get('/guru','guruController@index');
Route::get('/guru/tambah','guruController@create');
Route::get('/guru/hapus/{id}','guruController@destroy');
Route::post('/guru/store','guruController@store');
Route::get('/guru/edit/{id}','guruController@edit');
Route::put('/guru/update/{id}','guruController@update');

Route::get('/pengguna','penggunaController@index');

Route::get('/artikel','ArtikelController@index');   
Route::get('/anggota','AnggotaController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gambar','UploadController@index');
Route::post('/gambar/proses','UploadController@proses');
Route::get('/gambar/hapus/{id}','UploadController@destroy');
Route::get('/upload','CobaController@index');
Route::post('upload/proses','CobaController@proses');