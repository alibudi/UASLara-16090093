<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Alert;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['produks'] = Produk::all();
        return view('produk.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }
    public function addProduk()
    {
        return view('admin.add_produk');
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
            'nomor'            => 'required',
            'tahun'            => 'required',
            'tentang'          => 'required',
            'konten'           => 'required',
            'file'             => 'required|file|max:2000',
        ]);

        $uploadedFile = $request->file('file');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('./public/files/produk'), $imgName);

        $data = [
            'nomor'             => $request->nomor,
            'tahun'             => $request->tahun,
            'tentang'           => $request->tentang,
            'konten'            => $request->konten,
            'file'              => $imgName,
        ];

        $produk = Produk::create($data);
        if ($produk) {
            Alert::success('Tambah Berhasil', 'Sukses Tambah Data');
            return redirect()->route('produk.index');
        }

        Alert::error('Tambah Gagal', 'Sukses Tambah Data');
        return redirect()->route('produk.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['produk'] = Produk::findOrFail($id);
        return view('produk.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['produk'] = Produk::findOrFail($id);
        return view('produk.edit')->with($data);
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
            'nomor'            => 'required',
            'tahun'            => 'required',
            'tentang'          => 'required',
            'konten'           => 'required',
            'file'             => 'requiredfile|max:2000',
        ]);

        $produk = Produk::find($id);
        $produk->nomor           = $request->nomor;
        $produk->tahun           = $request->tahun;
        $produk->tentang         = $request->tentang;
        $produk->konten          = $request->konten;

        if (!empty($request->file('file'))) {
            $uploadedFile = $request->file('file');
            $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('./public/files/produk'), $imgName);

            File::delete(public_path('./public/files/produk') . '/' . $produk->file);

            $produk->file   = $imgName;
        }

        if ($produk->save()) {
            Alert::success('Update Berhasil', 'Sukses Update Data');
            return redirect()->route('produk.index');
        }

        Alert::error('Update Gagal', 'Sukses Update Data');
        return redirect()->route('produk.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->delete()) {
            Alert::success('Hapus Sukses', 'Sukses Hapus Data');
            return redirect()->route('produk.index');
        }

        Alert::success('Gagal Hapus', 'Gagal Hapus Data');
        return redirect()->route('produk.index');
    }
    
}
