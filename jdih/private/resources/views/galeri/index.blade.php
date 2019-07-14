{{-- load template master --}}
@extends('template.master')

{{-- isi dari halaman --}}
@section('content')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Data Galeri</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Galeri</div>
                    </div>
                    <a style="margin:10px;" href="{{ route('galeri.create') }}" class="btn btn-outline-success">Tambah data</a>
                    <div class="ibox-body">
                    @php
                        $no = 1;
                    @endphp
                        <table class="table table-striped table-bordered table-hover" id="{{ empty($galeris) ? '':'table-dt' }}" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (!empty($galeris))
                                @foreach ($galeris as $galeri)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->created_at  }}</td>
                                    <td>{{ $galeri->keterangan }}</td>
                                    <td>
                                    <a href="{{ route('galeri.show', $galeri->id) }}" class="info p-0" data-original-title="" title="">
                                    <i class="fa fa-eye font-medium-3 mr-2"></i>
                                </a>
                                <a href="{{route('galeri.edit', $galeri->id)}}" class="success p-0" data-original-title="" title="">
                                    <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="hapusData({{ $galeri->id }})" class="danger p-0" data-original-title="" title="">
                                    <i class="fa fa-trash font-medium-3 mr-2"></i>
                                </a>

                                <form id="galeri-{{ $galeri->id }}" action="{{ route('galeri.destroy', $galeri->id) }}" method="post" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id-{{ $galeri->id }}" value="">
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
        $("#menu-galeri").addClass("active");
        $(function(){
            $("#table-dt").dataTable();
        });
        function hapusData(id){
            let y = confirm('Are you sure to delete ?');
            if(y==true){
                $("#galeri-"+id).submit();
            }
        }
    </script>
@endsection
