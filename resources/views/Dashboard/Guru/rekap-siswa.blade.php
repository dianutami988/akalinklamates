@extends('dashboard.layouts.mainguru')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">📊 Rekap Absensi Siswa</h1>
</div>

<!-- Filter Kelas dan Periode -->
<form action="{{ route('guru.absensi.rekap-siswa') }}" method="GET" class="mb-4">
    <div class="row">
        <div class="col-md-3">
            <select name="kelas" class="form-select">
                <option value="">Pilih Kelas</option>
                @foreach($kelasList as $kelas)
                    <option value="{{ $kelas }}" {{ $selectedKelas == $kelas ? 'selected' : '' }}>{{ $kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select name="bulan" class="form-select">
                <option value="">Pilih Bulan</option>
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}" {{ $selectedBulan == $i ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $i, 10)) }}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-3">
            <select name="tahun" class="form-select">
                <option value="">Pilih Tahun</option>
                @for ($i = date('Y'); $i >= date('Y') - 5; $i--)
                    <option value="{{ $i }}" {{ $selectedTahun == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </div>
</form>

<!-- Tabel Rekap Absensi per Siswa -->
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5><i class="fas fa-table"></i> Rekap Kehadiran Siswa</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>✅ Hadir</th>
                        <th>⏳ Izin</th>
                        <th>🤒 Sakit</th>
                        <th>❌ Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($rekapSiswa as $siswa)
                        <tr>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->hadir }}</td>
                            <td>{{ $siswa->izin }}</td>
                            <td>{{ $siswa->sakit }}</td>
                            <td>{{ $siswa->alpha }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data rekap absensi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection