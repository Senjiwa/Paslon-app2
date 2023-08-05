<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>


    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> -->

    @if(Auth::guard('adminMiddle')->user()->role == 'app')
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>PaslonKu</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('berita.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('tambah.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Tambah Data</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dapil.index') }}">
            <i class="fas fa-fw fa-map"></i>
            <span>Dapil</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('data-coblos') }}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Data Coblos</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-partai.index') }}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Admin Partai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('fraksi.index') }}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Data Fraksi</span></a>
    </li>
    @elseif(Auth::guard('adminMiddle')->user()->role == 'partai')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('tambah.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Data Paslon</span></a>
    </li>
    @endif

</ul>