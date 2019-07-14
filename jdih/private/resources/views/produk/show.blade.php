{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Detail Data Produk</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=""><i class="la la-home font-20"></i></a>
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
                        <form class="form-horizontal" action="{{ route('produk.store) }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor</label>
                                <div class="col-sm-10">
                                    <input class="form-control " type="text"  value="{{ $produk->nomor }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun</label>
                                <div class="col-sm-10">
                                    <input class="form-control " type="text" value="{{ $produk->tahun }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tentang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  value="{{ $produk->tentang }}">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload File pdf</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="file" type="file" name="file">
                                    <img src="{{ asset('private/public/public/img/produk/'.$produk->file) }}" style="width:100px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Konten</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{ $produk->konten }}">
                             
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
