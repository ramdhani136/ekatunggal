<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;

class UploadController extends Controller
{
    public function index(){
		$gambar = Gambar::get();
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
        $file->move($lokasi,$namafile);

        Gambar::create([
            'nama'=>$namafile,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect()->back();
    }
}
