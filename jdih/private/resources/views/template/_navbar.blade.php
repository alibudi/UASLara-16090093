<nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset ('public/img/admin-avatar.png')}}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">ADMIN</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li id="menu-dashboard">
                        <a href="{{ url('admin')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                  
                    <li id="menu-profil">
                        <a href="{{ url('admin/profil') }}"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Profil</span>
                        </a>
                    </li>
            
                    <li id="menu-kategori">
                        <a href="{{ url('admin/kategori') }}"><i class="sidebar-item-icon fa fa-file"></i>
                            <span class="nav-label">Kategori</span>
                        </a>
                    </li>
                    <li id="menu-akun">
                        <a href="{{ url('admin/akun') }}"><i class="sidebar-item-icon fa fa-users"></i>
                            <span class="nav-label">Kelola Akun</span></a>
                    </li>
                    <li id="menu-produk">
                        <a href="{{ url('admin/produk') }}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Kelola Produk</span></a>
                    </li>
                    <li id="menu-berita">
                        <a href="{{ url('admin/berita') }}"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Kelola Berita</span></a>
                    </li>
                    <li id="menu-galeri">
                        <a href="{{ url('admin/galeri') }}"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Kelola Galeri</span></a>
                    </li>
                    <li id="menu-galeri">
                        <a href="{{ url('admin/log') }}"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Log Aktivitas</span></a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="sidebar-item-icon fa fa-power-off"></i>
                            <span class="nav-label">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        <!-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a><i class="sidebar-item-icon fa fa-power-off"></i> -->

                                    
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->