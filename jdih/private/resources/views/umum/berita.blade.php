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
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"> <img src="{{ asset ('public/img/b.png') }}" alt=""> </a>
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
         <!--Main layout-->
  <main >
        <div class="container">
    
          <!--Section: Post-->
          <section class="mt-4">
    
            <!--Grid row-->
            <div class="row">
    
              <!--Grid column-->
              <div class="col-md-8 mb-4">
           
                <!--Featured Image-->
                <div class="card mb-4 wow fadeIn">
    
                  <img src="{{ asset('private/public/public/img/berita/'.$berita->foto) }}" class="img-fluid" alt="">
    
                </div>
                <!--/.Featured Image-->
    
                <!--Card-->
                <div class="card mb-4 wow fadeIn">
    
                  <div class="card-header font-weight-bold">
                    <span>Detail Berita</span>
                    <span class="pull-right">
                      {{$berita->created_at}}
                    </span>
                  </div>
    
                  <!--Card content-->
                  <div class="card-body">
    
                    <div class="media d-block d-md-flex mt-3">
                      <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold">{{$berita->judul}}
                        </h5>{{$berita->keterangan}}
                      </div>
                    </div>
    
                  </div>
    
                </div>
              
                <!--/.Card-->
 
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-4 mb-4">
    
                <!--Card: Jumbotron-->
                <div class="card blue-gradient mb-4 wow fadeIn">
  
                <!--Card-->
                <div class="card mb-4 wow fadeIn">
    
                  <div class="card-header">Recent Posts</div>
    
                  <!--Card content-->
                  <div class="card-body">
    
                    <ul class="list-unstyled">
                    @if (!empty($beritas) && count($beritas))
                @foreach ($beritas as $p)
                      <li class="media">
                        <img style="width:100px;" class="d-flex mr-3" src="{{ asset('private/public/public/img/berita/'.$p->foto) }}" alt="Generic placeholder image">
                        <div class="media-body">
                          <a href="{{ route('umum.berita', $berita->id) }}">
                            <h5 class="mt-0 mb-1 font-weight-bold">{{$p->judul}}</h5>
                          </a>
                            <p>{{$p->penulis}}</p>
                        </div>
                      </li>
                      <br>
                      @endforeach
                      @endif
                    </ul>
    
                  </div>
    
                </div>
                <!--/.Card-->
    
              </div>
              <!--Grid column-->
    
            </div>
            <!--Grid row-->
    
          </section>
          <!--Section: Post-->
    
        </div>
      </main>
      <!--Main layout-->


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