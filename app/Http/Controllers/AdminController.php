<?php

namespace App\Http\Controllers;

use App\Kelurahan as Kelurahan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelurahans = Kelurahan::all();
        return view('app.admin', [
            'kelurahans' => $kelurahans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('app.kelurahan.tambah');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kelurahan = new Kelurahan;
        $kelurahan->nama = $request->nama;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->kota = $request->kota;
        $kelurahan->save();
        return redirect('/home/admin');
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
        //
        $kelurahan = Kelurahan::find($id);
        return view('app.kelurahan.edit', [
            'kelurahan' => $kelurahan
        ]);
        

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
        //
        $kelurahan = Kelurahan::find($id);
        $kelurahan->nama = $request->nama;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->kota = $request->kota;
        $kelurahan->save();
        return redirect('/home/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();
        return redirect('/home/admin');
    }
}
