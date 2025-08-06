@extends('dashboard.layouts.mainguru')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">📋 Daftar Absensi Siswa</h1>
</div>

<!-- Tombol Navigasi Absensi -->
<div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
    <a href="{{ route('guru.absensibarcode') }}" class="btn btn-primary me-md-2">
        <i class="fas fa-qrcode"></i> Absensi Barcode
    </a>
    <a href="{{ route('guru.absensi.manual') }}" class="btn btn-secondary">
        <i class="fas fa-pen"></i> Absensi Manual
    </a>
    <a href="{{ route('guru.absensi.rekap-siswa') }}" class="btn btn-info">
        <i class="fas fa-chart-bar"></i> Rekap Absensi Siswa
    </a>
</div>

<!-- Filter Kelas -->
<form action="{{ route('guru.absensi') }}" method="GET" class="mb-4">
    <div class="row">
        <div class="col-md-3">
            <select name="kelas" class="form-select" onchange="this.form.submit()">
                <option value="">Pilih Kelas</option>
                @foreach($kelasList as $kelas)
                    <option value="{{ $kelas }}" {{ $selectedKelas == $kelas ? 'selected' : '' }}>{{ $kelas }}</option>
                @endforeach
            </select>
        </div>
    </div>
</form>

<!-- Notifikasi Berhasil -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Statistik Absensi -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm text-white" style="background: linear-gradient(135deg, #4CAF50, #388E3C);">
            <div class="card-body text-center">
                <h5 class="card-title">✅ Siswa Hadir</h5>
                <h2 class="fw-bold">{{ $absensi->where('status', 'Hadir')->count() }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm text-white" style="background: linear-gradient(135deg, #FBC02D, #FFA000);">
            <div class="card-body text-center">
                <h5 class="card-title">⏳ Siswa Izin</h5>
                <h2 class="fw-bold">{{ $absensi->where('status', 'Izin')->count() }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm text-white" style="background: linear-gradient(135deg, #E53935, #D32F2F);">
            <div class="card-body text-center">
                <h5 class="card-title">❌ Siswa Alpha</h5>
                <h2 class="fw-bold">{{ $absensi->where('status', 'Alpha')->count() }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm text-white" style="background: linear-gradient(135deg, #29B6F6, #0288D1);">
            <div class="card-body text-center">
                <h5 class="card-title">🤒 Siswa Sakit</h5>
                <h2 class="fw-bold">{{ $absensi->where('status', 'Sakit')->count() }}</h2>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Absensi -->
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5><i class="fas fa-users"></i> Daftar Kehadiran Siswa</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Waktu Absen</th>
                        <th>Status</th>
                        <th>Guru</th>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($absensi as $absen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $absen->nama_siswa ?? 'Tidak Diketahui' }}</td>
                            <td>{{ $absen->kelas }}</td>
                            <td>{{ $absen->waktu_absen }}</td>
                            <td>
                                @if($absen->status === 'Hadir')
                                    <span class="badge bg-success">Hadir</span>
                                @elseif($absen->status === 'Izin')
                                    <span class="badge bg-warning text-dark">Izin</span>
                                @elseif($absen->status === 'Sakit')
                                    <span class="badge bg-info text-dark">Sakit</span>
                                @else
                                    <span class="badge bg-danger">Alpha</span>
                                @endif
                            </td>
                            <td>{{ $absen->guru }}</td>
                            <td>{{ $absen->mata_pelajaran }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada data absensi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection