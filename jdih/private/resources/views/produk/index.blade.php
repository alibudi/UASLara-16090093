{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Data  Produk</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Produk</div>
                    </div>
                    <a style="margin:10px;" href="{{ route('produk.create') }}" class="btn btn-outline-success">Tambah data</a>
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
                                    <th>Konten</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (!empty($produks))
                                @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $produk->nomor }}</td>
                                    <td>{{ $produk->tahun }}</td>
                                    <td>{{ $produk->tentang }}</td>
                                    <td>{{ $produk->konten }}</td>
                                    <td>
                                    <a href="{{ route('produk.show', $produk->id) }}" class="info p-0" data-original-title="" title="">
                                    <i class="fa fa-eye font-medium-3 mr-2"></i>
                                </a>
                                <a href="{{route('produk.edit', $produk->id)}}" class="success p-0" data-original-title="" title="">
                                    <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="hapusData({{ $produk->id }})" class="danger p-0" data-original-title="" title="">
                                    <i class="fa fa-trash font-medium-3 mr-2"></i>
                                </a>

                                <form id="produk-{{ $produk->id }}" action="{{ route('produk.destroy', $produk->id) }}" method="post" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id-{{ $produk->id }}" value="">
                                    <input type="submit" value="OK">
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
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>JDIH</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    @endsection

{{-- style khusus halaman --}}
@section('mystyle')
@section('js')
    <script>
        $("#menu-produk").addClass("active");
        $(function(){
            $("#table-dt").dataTable();
        });
        function hapusData(id){
            let y = confirm('Are you sure to delete ?');
            if(y==true){
                $("#produk-"+id).submit();
            }
        }
    </script>
@endsection
