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
        $this->validate($request, [
            'nama' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);
     
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('nama');
     
        $nama_file = time()."_".$file->getClientOriginalName();
     
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
     
     
        Gambar::create([
			'nama' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
     
        return redirect()->back();
        
    }
}
