@extends('dashboard.layouts.main')
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
  <!-- Card Total Data Guru -->
  <div class="col-md-3">
    <a href="guru" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Total Data Guru</h5>
          <h6 class="card-text text-white">{{ $totalGuru }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Siswa -->
  <div class="col-md-3">
    <a href="siswa" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #FF66CC, #FF1493);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-users"></i> Total Siswa</h5>
          <h6 class="card-text text-white">{{ $totalSiswa }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Laporan -->
  <div class="col-md-3">
    <a href="laporan" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #00b09b, #96c93d);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-file-alt"></i> Total Laporan</h5>
          <h6 class="card-text text-white">{{ $totalLaporan }}</h6>
        </div>
      </div>
    </a>
  </div>

  <!-- Card Total Kalender -->
  <div class="col-md-3">
    <a href="admin/kalender" class="text-decoration-none">
      <div class="card text-white mb-3 shadow-sm hover-effect animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #ff6f61, #ffcccb);">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-calendar-alt"></i> Total Kalender</h5>
          <h6 class="card-text text-white">{{ $totalKalender }}</h6>
        </div>
      </div>
    </a>
  </div>
</div>

@endsection