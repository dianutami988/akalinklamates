<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('guru') ? 'active' :'' }}" aria-current="page" href="/guru">
          <span data-feather="grid"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('absensi') ? 'active' :'' }}" aria-current="page" href="/absensi">
          <span data-feather="clipboard"></span>
          Absensi
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('materi') ? 'active' :'' }}" aria-current="page" href="/materi">
          <span data-feather="book"></span>
          Materi
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('guru/tugas') ? 'active' :'' }}" aria-current="page" href="/guru/tugas">
          <span data-feather="briefcase"></span>
          Tugas
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('guru/pengumpulan') ? 'active' :'' }}" aria-current="page" href="/guru/pengumpulan">
          <span data-feather="briefcase"></span>
          Pengumpulan Tugas
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('laporan') ? 'active' :'' }}" aria-current="page" href="/laporan">
          <span data-feather="file-text"></span>
          Laporan
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('profil') ? 'active' :'' }}" aria-current="page" href="/profil">
          <span data-feather="user"></span>
          Profil
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