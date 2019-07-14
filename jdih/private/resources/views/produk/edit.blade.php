{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Edit Produk</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Form Produk</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        @method('PATCH')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('nomor') ? 'has-error':'' }}" type="text" name="nomor" value="{{ $produk->nomor }}">
                                    @if ($errors->has('nomor'))
                                        <p class="text-danger">{{ $errors->first('nomor') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('tahun') ? 'has-error':'' }}" type="text" name="tahun" value="{{ $produk->tahun }}">
                                    @if ($errors->has('tahun'))
                                        <p class="text-danger">{{ $errors->first('tahun') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tentang</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('tentang') ? 'has-error':'' }}" type="text" name="tentang" value="{{ $produk->tentang }}">
                                    @if ($errors->has('tentang'))
                                        <p class="text-danger">{{ $errors->first('tentang') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('private/public/public/img/produk/'.$produk->file) }}" style="width:100px;">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ganti Gambar</label>
                                <div class="col-sm-10">
                                        <input class="{{ $errors->has('file') ? 'has-error':'' }}" type="file" id="file" name="file">
                                    

                                        @if ($errors->has('file'))
                                            <p class="text-danger">{{ $errors->first('file') }}</p>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Konten</label>
                                <div class="col-sm-10">
                                    <input class="form-control  {{$errors->has('konten') ? 'has-error':'' }}" type="text" name="konten" value="{{ $produk->konten }}">
                                    @if ($errors->has('konten'))
                                        <p class="text-danger">{{ $errors->first('konten') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    @endsection

    @section('js')
    <script>
        $("#menu-produk").addClass("active");
    </script>
@endsection
