<?php

namespace App\Http\Controllers;

use App\Kelurahan as Kelurahan;
use App\Pasien as Pasien;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasiens = Pasien::all();
        return view('app.operator', [
            'pasiens' => $pasiens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelurahans = Kelurahan::all();
        return view('app.pasien.tambah', [
            'kelurahans' => $kelurahans
        ]);
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
        $prefix = date('ym');

        $total = Pasien::count() + 1;
        $id = $prefix . str_pad($total, 6, '0', STR_PAD_LEFT) ;
        $pasien = new Pasien;
        $pasien->id = $id;
        $pasien->nama = $request->nama;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->no_telpon = $request->nama;
        $pasien->rt_rw = $request->rt_rw;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->jk = $request->jk;
        $pasien->save();
        return redirect('/home/operator');
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
        $pasien = Pasien::find($id);
        $kelurahans = Kelurahan::all();
        return view('app.pasien.edit', [
            'pasien' => $pasien,
            'kelurahans' => $kelurahans
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
        $pasien = Pasien::find($id);
        $pasien->nama = $request->nama;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->no_telpon = $request->nama;
        $pasien->rt_rw = $request->rt_rw;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->jk = $request->jk;
        $pasien->save();
        return redirect('/home/operator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/home/operator');
    }
}
