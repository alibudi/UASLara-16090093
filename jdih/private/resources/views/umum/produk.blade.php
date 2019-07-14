<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset ('public/img/jdih-logo.jpeg') }}" type="image/png">
    <title>Jaringan Dokumentasi Informasi Hukum</title>
    <meta name="description" content="Jaringan Dokumentasi Informasi Hukum"/>
    <meta name="autho" content="ali budi purnomo">
    <meta name="keyword" content="Jdih">
    <link href="{{ asset ('public/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{ asset ('public/vendors/DataTables/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('public/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/styles/main.css') }}" rel="stylesheet">
  </head>
  <body id="top">

      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"> <img src="{{ asset ('public/img/b.png')}}" alt=""> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link active" href="{{ url('/')}}#beranda"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#tentangkami"><i class="fa fa-book"></i>Tentang Kami</a></li>
              <li class="nav-item"><a class="nav-link" href="#kegiatan"><i class="fa fa-camera"></i>Kegiatan</a></li>
              <li class="nav-item"><a class="nav-link" href="#galeri"><i class="fa fa-photo"></i>Galeri</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('produk')}}"><i class="fa fa-file"></i>Produk</a></li>
            
            </div>
        </div>
      </nav>
<br><br><br><br>
    <br>
<div class="col-sm-8" style="margin-left:100px;">
                    <div class="ibox-body">
                    @php
                        $no = 1;
                    @endphp
                        <table class="table table-striped table-bordered table-hover" id="{{ empty($produks) ? '':'table-dt' }}" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor</th>
                                    <th>Tahun</th>
                                    <th>Tentang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                            @if (!empty($produks))
                                @foreach ($produks as $produk)
                            <tbody>
                                <tr>
                                <td>{{ $no++ }}</td>
                                    <td>{{ $produk->nomor }}</td>
                                    <td>{{ $produk->tahun }}</td>
                                    <td>{{ $produk->tentang }}</td>
                                    <td>
                                    <a class="fa fa-eye" data-toggle="modal" data-target="#<?php echo 'modal'.$produk->id?>"></a> </td>
                                    <form>
                                        <div class="modal fade" id="<?php echo 'modal'.$produk->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">File Pdf </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="form-group row">
                                                        <div class="col-md-12">
                                                        <embed class="col-md-12" style="height: 500px;" src="{{ asset('private/public/public/files/produk/'.$produk->file) }}">
                                                        </div>
                                                    </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                              
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="8" class="text-center"><i>Tidak Ada Data</i></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
    </div>
    <br>
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-5 flex-center"><a class="px-3"><i class="fa fa-facebook fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-twitter fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-google-plus fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-linkedin fa-lg white-text"></i></a></div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container-fluid">
          <p>&copy; <a href="/">Jdih</a> <a href="javascript:void(0)" target="_blank">Jaringan Dokumentasi Informasi Hukum</a></p>
        </div>
      </div>
    </footer>
    <script src="{{ asset ('public/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
   
    <!-- DataTables JS -->
    <script src="{{ asset ('public/vendors/DataTables/datatables.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset ('public/js/mdb.min.js') }}"></script>
    <script>new WOW().init();
       $(function(){
            $("#table-dt").dataTable();
        });</script>
</body>
</html>