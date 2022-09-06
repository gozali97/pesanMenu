<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{ url('assets/images/faces/face1.jpg')}}" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">Administrator</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">Master Data</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ url('kategori') }}">Kategori</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('nomeja') }}">No Meja</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('produk') }}">Menu</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('transaksi') }}">
                    <span class="menu-title">Transaksi</span>
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>
