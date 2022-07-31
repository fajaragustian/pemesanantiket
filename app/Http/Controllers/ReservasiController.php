<?php

namespace App\Http\Controllers;

use App\Models\DaftarHarga;
use App\Models\Reservasi;
use App\Models\Wisata;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $wisata = Wisata::all();
        $harga = DaftarHarga::all();
        return view('reservasiCreate',compact('harga','wisata'));
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
        $this->validate($request, [
            'nama'     => 'required',
            'nik'   => 'required',
            'nohp'   => 'required',
            'wisata'   => 'required',
            'tglkunjungan'   => 'required',
            'dewasa'   => 'required',
            'anak'   => 'required',
            'harga'   => 'required',
            'totbay'   => 'required',
        ]);
        $data = Reservasi::create([
            'nama'     => $request->nama,
            'nik'     => $request->nik,
            'nohp'     => $request->nohp,
            'wisata_id'   => $request->wisata,
            'tglkunjungan'     => $request->tglkunjungan,
            'dewasa'     => $request->dewasa,
            'anak'     => $request->anak,
            'daftar_harga_id'   => $request->harga,
            'totbay'     => $request->totbay,
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('reservasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('reservasi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
    }
}
