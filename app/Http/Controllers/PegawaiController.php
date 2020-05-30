<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        $data = DB::table('pegawai')->get();
        return view('index',['data'=>$data]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'jabatan'=>$request->jabatan,
            'alamat'=>$request->alamat
        ]);

        return redirect('/');
    }

    public function edit($id){
        $ambil = DB::table('pegawai')->where('id',$id)->get();
        return view('edit',['ambil'=>$ambil]);
    }

    public function update(Request $request){
        DB::table('pegawai')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat
        ]);
        
        return redirect('/');
    }

    public function hapus($id){
        DB::table('pegawai')->where('id',$id)->delete();
        return redirect('/');
    }

}