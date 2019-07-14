{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Tambah Galeri</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Form Galeri</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('judul') ? 'has-error':'' }}" type="text" name="judul">
                                    @if ($errors->has('judul'))
                                        <p class="text-danger">{{ $errors->first('judul') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Foto</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('foto') ? 'has-error':'' }}" type="file" name="foto">
                                    @if ($errors->has('foto'))
                                        <p class="text-danger">{{ $errors->first('foto') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input class="form-control $errors->has('keterangan') ? 'has-error':'' }}" type="text" name="keterangan">
                                    @if ($errors->has('keterangan'))
                                        <p class="text-danger">{{ $errors->first('keterangan') }}</p>
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
                <div class="font-13">2019 © <b>Jdih</b> </div>
                <a class="px-4" hre target="_blank">Kabupaten Brebes</a>
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
