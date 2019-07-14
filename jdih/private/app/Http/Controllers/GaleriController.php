<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galeris'] = Galeri::all();
        return view('galeri.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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
            'judul'   => 'required',
            'keterangan'      => 'required',
            'foto'      => 'required|image'
        ]);

        $uploadedFile = $request->file('foto');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('./public/img/galeri'), $imgName);

        $data = [
            'judul'   => $request->judul,
            'keterangan'      => $request->keterangan,
            'foto'      => $imgName
        ];

        $galeri = Galeri::create($data);
        if ($galeri) {
            Alert::success('Sukses Tambah', 'Sukses Tambah Data');
            return redirect()->route('galeri.index');
        }

        Alert::success('Gagal Tambah', 'Gagal Tambah Data');
        return redirect()->route('galeri.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['galeri'] = Galeri::findOrFail($id);
        return view('galeri.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['galeri'] = Galeri::findOrFail($id);
        return view('galeri.edit')->with($data);
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
            'judul'   => 'required',
            'keterangan'      => 'required|',
            'foto'      => 'nullable|image'
        ]);

        $galeri = Galeri::find($id);
        $galeri->judul = $request->judul;
        $galeri->keterangan = $request->keterangan;
       

        if (!empty($request->file('foto'))) {
            $uploadedFile = $request->file('foto');
            $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('./public/img/galeri'), $imgName);

            File::delete(public_path('./public/img/galeri') . '/' . $galeri->foto);

            $galeri->foto = $imgName;
        }

        if ($galeri->save()) {
            Alert::success('Sukses Update', 'Sukses Update Data');
            return redirect()->route('galeri.index');
        }

        Alert::success('Gagal Update', 'Gagal Update Data');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        if ($galeri->delete()) {
            Alert::success('Hapus Sukses', 'Sukses Hapus Data');
            return redirect()->route('galeri.index');
        }

        Alert::success('Gagal Hapus', 'Gagal Hapus Data');
        return redirect()->route('galeri.index');
    }
}
