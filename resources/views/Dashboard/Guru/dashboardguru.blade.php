@extends('dashboard.layouts.mainguru')

@section('container')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Dashboard Guru</h1>
</div>

<div class="row">
  <!-- Card Total Pengumpulan Tugas -->
  <div class="col-md-3">
    <a href="/guru/pengumpulan" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-tasks"></i> Total Pengumpulan Tugas</h5>
          <h6 class="card-text text-white">{{ $totalPengumpulanTugas }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Absensi Siswa -->
  <div class="col-md-3">
    <a href="/guru/absensi" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #FF66CC, #FF1493);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-user-check"></i> Total Absensi Siswa</h5>
          <h6 class="card-text text-white">{{ $totalAbsensi }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Materi -->
  <div class="col-md-3">
    <a href="/materi" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #00b09b, #96c93d);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-book"></i> Total Materi</h5>
          <h6 class="card-text text-white">{{ $totalMateri }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Tugas -->
  <div class="col-md-3">
    <a href="/guru/pengumpulan" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #ff9a9e, #fad0c4);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-clipboard-list"></i> Total Tugas</h5>
          <h6 class="card-text text-white">{{ $totalTugas }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Laporan -->
  <div class="col-md-3">
    <a href="/laporan" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #ff6f61, #ffcccb);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-file-alt"></i> Total Laporan</h5>
          <h6 class="card-text text-white">{{ $totalLaporan }}</h6>
        </div>
      </div>
    </a>
  </div>
</div>

@endsection