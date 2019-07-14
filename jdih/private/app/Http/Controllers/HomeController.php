<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Users;
use App\Berita;
use App\Galeri;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['produk_count'] = Produk::count();
        $data['user_count'] = Users::count();
        $data['berita_count'] = Berita::count();
        $data['galeri_count'] = Galeri::count();
        return view('admin.home')->with($data);
    }
}
