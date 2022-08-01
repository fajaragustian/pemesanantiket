<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wisata = Wisata::latest()->paginate(2);
        return view('wisata', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('wisataCreate');
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
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'nama' => 'required',
            'link' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/wisata', $image->hashName());

        $wisata = Wisata::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'link' => $request->link,
        ]);

        if ($wisata) {
            //redirect dengan pesan sukses
            return redirect()
                ->route('wisata.index')
                ->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()
                ->route('wisata.index')
                ->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Wisata::findOrFail($id);
        return view('wisataShow', compact('data'));
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
    public function update(Request $request, $wisata)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        //get data Blog by ID
        $wisata = Wisata::findOrFail($wisata);

        if ($request->file('image') == '') {
            $wisata->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        } else {
            //hapus old image
            Storage::disk('local')->delete('public/wisata/' . $wisata->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/wisata', $image->hashName());

            $wisata->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        if ($wisata) {
            //redirect dengan pesan sukses
            return redirect()
                ->route('wisata.index')
                ->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()
                ->route('wisata.index')
                ->with(['error' => 'Data Gagal Diupdate!']);
        }
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
        $wisata = Wisata::findOrFail($id);
        Storage::disk('local')->delete('public/wisata/' . $wisata->image);
        $wisata->delete();

        if ($wisata) {
            //redirect dengan pesan sukses
            return redirect()
                ->route('wisata.index')
                ->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()
                ->route('wisata.index')
                ->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
