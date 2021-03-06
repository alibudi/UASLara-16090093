{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Edit Galeri</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Galeri</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="{{ route('galeri.update', $galeri->id) }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        @method('PATCH')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">judul</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('judul') ? 'has-error':'' }}" type="text" name="judul" value="{{ $galeri->judul }}">
                                    @if ($errors->has('judul'))
                                        <p class="text-danger">{{ $errors->first('judul') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('keterangan') ? 'has-error':'' }}" type="text" name="keterangan" value="{{ $galeri->keterangan }}">
                                    @if ($errors->has('keterangan'))
                                        <p class="text-danger">{{ $errors->first('keterangan') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('private/public/public/img/galeri/'.$galeri->foto) }}" style="width:100px;">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ganti Gambar</label>
                                <div class="col-sm-10">
                                        <input class="{{ $errors->has('foto') ? 'has-error':'' }}" type="file" id="foto" name="foto">
                                    

                                        @if ($errors->has('foto'))
                                            <p class="text-danger">{{ $errors->first('foto') }}</p>
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
        $("#menu-galeri").addClass("active");
    </script>
@endsection
