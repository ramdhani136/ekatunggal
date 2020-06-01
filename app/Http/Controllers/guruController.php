<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::paginate(10);
        return view('guru.index',['data'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'umur'=>'required'
        ]);

        Guru::create([
            'nama'=>$request->nama,
            'umur'=>$request->umur
        ]);

        return redirect('/guru');
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
        $ambil = Guru::where('id',$id)->get();
        return view('guru.edit',['data'=>$ambil]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'nama'=>'required',
            'umur'=>'required'
        ]);

    $this->validate($request,[
            'nama'=>'required',
            'umur'=>'required'
        ]);

        Guru::find($id)->update([
            'nama'=>$request->nama,
            'umur'=>$request->umur
        ]);

        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::find($id)->delete();
        return redirect('/guru');
    }
}
