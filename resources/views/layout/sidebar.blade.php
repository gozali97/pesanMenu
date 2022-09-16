<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ url('assets/img/restoapp.png')}}" alt="" class="dark-logo">
            <img src="{{ url('assets/img/restoapp.png')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-home"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-package"></span><span class="mtext">Master Data</span>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"> <a class="nav-link" href="{{ url('kategori') }}">Kategori</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('nomeja') }}">No Meja</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('produk') }}">Menu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/transaksi') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-inbox"></span><span class="mtext">Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user3"></span><span class="mtext">User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-logout1"></span><span class="mtext">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
