<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil = DB::table('barang')->paginate(10);
        return view('barang.index',['data'=>$tampil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'nama'=>$request->nama,
            'qty'=>$request->qty,
            'satuan'=>$request->satuan,
            'lokasi'=>$request->lokasi
        ]);

        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tampil = DB::table('barang')->where('id',$id)->get();
        return view('barang.edit',['data'=>$tampil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('barang')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'qty'=>$request->qty,
            'satuan'=>$request->satuan,
            'lokasi'=>$request->lokasi
        ]);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/barang');
    }

    public function cari(Request $request){
        $cari = $request->cari;
        $tampil = DB::table('barang')->where('nama','LIKE',"%".$cari."%")
        ->paginate();
        return view('barang.index',['data'=>$tampil]);
    }
}
