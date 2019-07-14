<?php

namespace App\Http\Controllers;
use App\Users;
use App\Produk;
use App\Berita;
use App\Galeri;
use Alert;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['produk_count'] = Produk::count();
        $data['user_count'] = Users::count();
        $data['berita_count'] = Berita::count();
        $data['galeri_count'] = Galeri::count();
        Alert::success('Tambah Berhasil', 'Sukses Tambah Data');
        return view('admin.home')->with($data);
    }

    // public function kategori()
    // {
    //     $data = Kategori::all();
    //     return view('admin.kategori', compact('data'));
    // }
    public function akun()
    {
        return view('admin.akun');
    }

    public function berita()
    {
        return view('admin.berita');
    }

    public function galeri()
    {
        return view('admin.galeri');
    }
    public function profil()
    {
        $data = User::all();
        return view('admin.profil', compact('data'));
    }
    public function produk()
    {
        
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $kategori = new Kategori;
        $kategori->name = $request->get('name');
        $kategori->save();
        
        return redirect('admin/kategori')->with('success', 'Selamat data Kategori berhasil disimpan');
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
