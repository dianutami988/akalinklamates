<style>
    /* Menambahkan efek warna saat kursor mengarah ke tombol */
    .nav-link {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Efek hover pada tombol */
    .nav-link:hover {
        background-color: #004085;
        /* Ganti dengan warna biru yang lebih gelap */
        color: #fff;
        /* Mengubah warna teks menjadi putih saat hover */
    }

    /* Untuk memastikan menu yang aktif tetap berwarna */
    .nav-link.active {
        background-color: #0056b3;
        /* Biru gelap untuk tombol aktif */
        color: #fff;
    }

    /* Dropdown Menu */
    .nav-item .dropdown-toggle {
        cursor: pointer;
    }

    /* Warna untuk dropdown yang expand */
    .nav-item .collapse.show {
        background-color: #003366;
        /* Warna biru gelap */
    }

    /* Gaya untuk menu dropdown yang tertutup */
    .nav-item .collapse {
        background-color: #004085;
        /* Warna dropdown sebelum expand */
    }

    /* Styling submenu list */
    .list {
        padding-left: 20px;
    }

    .list a {
        color: #fff;
        /* Warna teks di submenu */
        text-decoration: none;
    }

    .list a:hover {
        color: #ffcc00;
        /* Warna saat hover pada sub-menu */
    }

    /* Warna dan ikon untuk dropdown chevron */
    .nav-item .dropdown-toggle .feather-chevron-down {
        transition: transform 0.3s ease;
    }

    .nav-item .collapse.show+.nav-link .feather-chevron-down {
        transform: rotate(180deg);
        /* Memutar ikon chevron saat dropdown terbuka */
    }
</style>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/admin/dashboard">
                    <span data-feather="grid"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
            <li class="nav-link {{ Request::is('admin/guru') ? 'active' : '' }} dropdown" aria-current="page"
                href="/admin/guru">
                <span data-feather="user"></span>
                Guru <span data-feather="chevron-down"></span>
                <ul>
                    <li><a class="list" href="/admin/guru">Data Guru </a></li>
                    <li><a class="list" href="/admin/guru/jadwal">Jadwal Mengajar</a></li>
                </ul>
            </li>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/siswa') ? 'active' : '' }}" aria-current="page"
                    href="/admin/siswa">
                    <span data-feather="users"></span>
                    Siswa
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/laporan') ? 'active' : '' }}" aria-current="page"
                    href="/admin/laporan">
                    <span data-feather="file-text"></span>
                    Laporan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/kalender*') ? 'active' : '' }}" aria-current="page" 
                   href="/admin/admin/kalender">
                    <span data-feather="calendar"></span>
                    Kalender Akademik
                </a>
            </li>                                    

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">
                    <span data-feather="log-out"></span>
                    Logout
                </a>
            </li>
        </ul>
</nav>
