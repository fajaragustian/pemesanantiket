<?php

namespace App\Http\Controllers;

use App\Models\DaftarHarga;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DaftarHargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DaftarHarga::latest()->paginate(2);
        $wisata = Wisata::all();
        return view('daftarharga',compact('data','wisata'));
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
        return view('daftarhargaCreate',compact('wisata'));
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
            'harga'     => 'required',
            'wisata'   => 'required'
        ]);
        $data = DaftarHarga::create([
            'harga'     => $request->harga,
            'wisata_id'   => $request->wisata
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('daftarharga.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('daftarharga.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = DaftarHarga::findOrFail($id);
        return view('daftarhargaShow',compact('data'));
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
        $data = Wisata::findOrFail($id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()
                ->route('daftarharga.index')
                ->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()
                ->route('daftarharga.index')
                ->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
