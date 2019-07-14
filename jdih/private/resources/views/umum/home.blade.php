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
    <link href="{{ asset ('public/css/styles/main.css') }}" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"> <img src="{{ asset ('public/img/b.png') }}" alt=""> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link active" href="#beranda"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#tentangkami"><i class="fa fa-book"></i>Tentang Kami</a></li>
              <li class="nav-item"><a class="nav-link" href="#kegiatan"><i class="fa fa-camera"></i>Kegiatan</a></li>
              <li class="nav-item"><a class="nav-link" href="#galeri"><i class="fa fa-photo"></i>Galeri</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('produk')}}"><i class="fa fa-file"></i>Produk</a></li>
            
            </div>
        </div>
      </nav>
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-12 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="text-align: center;">Selamat Datang Di Website JDIH</h1>
                    <div class="h6" style="text-align: center">
                     Jaringan Dokumentasi Informasi Hukum
                    </div>
                  </div><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
<div id="content">
<section class="text-center py-5 grey lighten-4" id="tentangkami">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Tentang Kami</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text">
       
      </p>
    </div>
    <div class="row">
      <div class="col-md-6 mb-r wow fadeInUp" data-wow-delay=".3s"><i class="fa fa-dashboard fa-3x orange-text"></i>
        <h3 class="h4 mt-3">Visi</h3>
        <p class="mt-3 blue-grey-text">
          “Menuju Brebes Unggul, Sejahtera dan Berkeadilan”
        </p>
      </div>
      <div class="col-md-6 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">Misi</h3>
        <p class="mt-3 blue-grey-text">
          Memantapkan kesadaran dan partisipasi masyarakat dalam pembangunan guna menunjang percepatan revolusi mental yang berbasis nilai keagamaan yang toleran, budaya lokal dan supremasi hukum. 
        </p>
      </div>
    </div>
  </div>
</section>
<section class="py-5" id="kegiatan">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="text-center h1 my-4">Kegiatan Terbaru</h2>
    </div>
    
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
    @foreach ($beritas as $berita)
      <div class="col-lg-4 col-md-6 mb-4">
        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="{{ asset('private/public/public/img/berita/'.$berita->foto) }}" class="card-img-top"
              alt="">
            <a href="javascript:void(0)"></a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <h4 class="card-title">{{$berita->judul}}</h4>
            <!--Text-->
            <p class="card-text"> {{$berita->headline}} </p>  
            <a href="{{ route('umum.berita', $berita->id) }}"
              class="btn btn-primary btn-md">Lihat Selengkapnya
              <i class="fa fa-arrow-right ml-2"></i>
            </a>
          </div>

        </div>
        <!--/.Card-->
      </div>
     @endforeach
     
  </div>
</section>


<section class="text-center py-5 indigo darken-1 text-white" id="galeri">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Galeri</h2>
      <br>
    </div>
    <div class="row wow zoomIn">
    @foreach ($galeris as $galeri)
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card ">
            <img src="{{ asset('private/public/public/img/galeri/'.$galeri->foto) }}" class="card-img-top"
            alt="">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
            <div class="card-body">
              <p> {{$galeri->keterangan}}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
</div>
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
    <script src="{{ asset ('public/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset ('public/js/mdb.min.js') }}"></script>
    <script>new WOW().init();</script>
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
  <!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>