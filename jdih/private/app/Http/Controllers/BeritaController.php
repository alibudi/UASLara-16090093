<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Alert;
use Illuminate\Support\Facades\File;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['beritas'] = Berita::all();
        return view('berita.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'            => 'required',
            'headline'         => 'required',
            'penulis'          => 'required',
            'keterangan'       => 'required',
            'foto'             => 'required|image'
        ]);

        $uploadedFile = $request->file('foto');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('./public/img/berita'), $imgName);

        $data = [
            'judul'          => $request->judul,
            'headline'      => $request->headline,
            'penulis'       => $request->penulis,
            'keterangan'    => $request->keterangan,
            'foto'          => $imgName
        ];

        $berita = Berita::create($data);
        if ($berita) {
            Alert::success('Sukses Tambah', 'Sukses Tambah Data');
            return redirect()->route('berita.index');
        }

        Alert::success('Gagal Tambah', 'Gagal Tambah Data');
        return redirect()->route('berita.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['berita'] = Berita::findOrFail($id);
        return view('berita.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['berita'] = Berita::findOrFail($id);
        return view('berita.edit')->with($data);
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
        $request->validate([
            'judul'            => 'required',
            'headline'         => 'required',
            'penulis'          => 'required',
            'keterangan'       => 'required',
            'foto'             => 'required|image',
        ]);

        $berita = Berita::find($id);
        $berita->judul           = $request->judul;
        $berita->headline           = $request->headline;
        $berita->penulis         = $request->penulis;
        $berita->keterangan          = $request->keterangan;

        if (!empty($request->file('foto'))) {
            $uploadedFile = $request->file('foto');
            $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('./public/img/berita'), $imgName);

            File::delete(public_path('./public/img/berita') . '/' . $berita->foto);

            $berita->foto   = $imgName;
        }

        if ($berita->save()) {
            Alert::success('Update Berhasil', 'Sukses Update Data');
            return redirect()->route('berita.index');
        }

        Alert::error('Update Gagal', 'Sukses Update Data');
        return redirect()->route('berita.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->delete()) {
            Alert::success('Hapus Sukses', 'Sukses Hapus Data');
            return redirect()->route('berita.index');
        }

        Alert::success('Gagal Hapus', 'Gagal Hapus Data');
        return redirect()->route('berita.index');
    
    }
}
