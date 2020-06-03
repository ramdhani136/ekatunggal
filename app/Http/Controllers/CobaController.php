<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use File;

class CobaController extends Controller
{
    public function index(){
		$gambar = Gambar::all();
		return view('gambar',['gambar' => $gambar]);
	}

    public function proses(Request $request){
        $this->validate($request,[
            'file'=>'required',
            'keterangan'=>'required',
        ]);

        $file = $request->file('file');
        $namafile = time()."_".$file->getClientOriginalName();
        $lokasi = 'data_file';
        $file->move($lokasi, $namafile);
        Gambar::create([
            'nama'=>$namafile,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        $gambar=Gambar::where('id',$id)->first();
        File::delete('data_file/'.$gambar->nama);
        Gambar::where('id',$id)->delete();
        return redirect()->back();
    }
}


