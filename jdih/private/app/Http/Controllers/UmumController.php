<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Galeri;
use App\Produk;
use App\Kategori;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['about']  = About::get()->first();
        $data['beritas'] = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $data['galeris'] = Galeri::orderBy('created_at', 'desc')->limit(3)->get();
        // $data['berita'] = Berita::orderBy('created_at', 'desc')->paginate(12);
        return view('umum.home')->with($data);
        // return view('umum.home');
    }

    public function produk()
    {
        $data['produks'] = Produk::all();
        return view('umum.produk')->with($data);
    }
    public function berita($id)
    {
        $data['beritas'] = Berita::all();
        $data['beritas'] = Berita::findOrFail($id);
        return view('umum.berita')->with($data);
        
    }
    public function editBerita($id)
    {
        $data['beritas'] = Berita::orderBy('created_at', 'desc')->limit(4)->get();
        $data['berita'] = Berita::findOrFail($id);
        return view('umum.berita')->with($data);
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
