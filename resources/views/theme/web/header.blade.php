<header class="header">
    <div class="container-fluid bg-dark  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="header-main">
            <div class="logo">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logo.png" alt="logo" width="199px">
            </div>
            <div class="open-nav-menu">
            <span></span>
            </div>
            <div class="menu-overlay">
            </div>
            <!-- navigation menu start -->
            <nav class="nav-menu">
            <div class="close-nav-menu">
                <img src="img/close.svg" alt="close">
            </div>
            <ul class="menu">
                <li class="menu-item menu-item-has-children">
                    <a href="index.php" data-toggle="sub-menu">Beranda</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('web.pengumuman') }}">Pengumuman</a>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#" data-toggle="sub-menu">Laporkan<i class="plus"></i></a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="{{ route('web.hilang') }}">Laporkan Barang Hilang</a></li>
                        <li class="menu-item"><a href="{{ route('web.temuan') }}">Laporkan Barang Temuan</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ route('web.temukan') }}" class="nav-item nav-link">Temukan</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('web.grafik') }}" class="nav-item nav-link">Grafik</a>
                </li>
                <li class="menu-item">
                    <a href="profil.php">Profil</a>
                </li>
                <a href="{{ route('web.auth.logout') }}" class="btn btn-primary px-4">Logout</a>
            </li>
            </ul>
            </nav>
            <!-- navigation menu end -->
        </div>
    </div>
    </header>
    