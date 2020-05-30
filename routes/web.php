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