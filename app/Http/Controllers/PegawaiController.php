<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{

    public function tes(){
        $nama =  "ilham Ramdhani";
        $job = ["It Support","Programmer","Manager"];
        return view('pegawai',['nama'=>$nama,'job'=>$job]);
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama=$request->input('nama');
        $alamat=$request->input('alamat');
        return "Nama saya ".$nama.", Saya Tinggal di ".$alamat;
    }

    public function index(){
        $pegawai = DB::table('pegawai')->get();
        return view('index',['pegawai'=>$pegawai]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
        
    }
}
