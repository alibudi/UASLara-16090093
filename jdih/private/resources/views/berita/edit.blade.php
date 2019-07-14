{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Edit Berita</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Form Berita</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="{{ route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        @method('PATCH')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('judul;') ? 'has-error':'' }}" type="text" name="judul" value="{{ $berita->judul }}">
                                    @if ($errors->has('judul'))
                                        <p class="text-danger">{{ $errors->first('judul') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Headline</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('headline') ? 'has-error':'' }}" type="text" name="headline" value="{{ $berita->headline }}">
                                    @if ($errors->has('headline'))
                                        <p class="text-danger">{{ $errors->first('headline') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-10">
                                    <input class="form-control {{ $errors->has('penulis') ? 'has-error':'' }}" type="text" name="penulis" value="{{ $berita->penulis }}">
                                    @if ($errors->has('penulis'))
                                        <p class="text-danger">{{ $errors->first('penulis') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('private/public/public/img/berita/'.$berita->foto) }}" style="width:100px;">
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
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input class="form-control $errors->has('keterangan') ? 'has-error':'' }}" type="text" name="keterangan" value="{{ $berita->keterangan }}">
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
        $("#menu-berita").addClass("active");
    </script>
@endsection
