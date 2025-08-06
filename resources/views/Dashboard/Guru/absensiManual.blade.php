@extends('dashboard.layouts.mainguru')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">📋 Absensi Manual</h1>
</div>

<!-- Filter Kelas -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">🎓 Filter Berdasarkan Kelas</h5>
    </div>
    <div class="card-body">
        <form method="GET" action="{{ route('guru.absensi.manual') }}">
            <div class="row g-3 align-items-center">
                <div class="col-md-4">
                    <label for="kelas" class="form-label">Pilih Kelas</label>
                    <select name="kelas" id="kelas" class="form-select">
                        <option value="">Semua Kelas</option>
                        @foreach ($kelasList as $kelasOption)
                            <option value="{{ $kelasOption }}" {{ $kelas == $kelasOption ? 'selected' : '' }}>
                                {{ $kelasOption }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">🔍 Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Daftar Siswa -->
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">📝 Daftar Siswa</h5>
    </div>
    <div class="card-body">
        @if ($siswas->isNotEmpty())
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>👤 Nama</th>
                            <th>🏫 Kelas</th>
                            <th>📅 Status Kehadiran</th>
                            <th>📚 Mata Pelajaran</th>
                            <th>👨‍🏫 Guru</th>
                            <th>✅ Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $index => $siswa)
                        <tr>
                            <form action="{{ route('guru.absensi.manual.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_siswa" value="{{ $siswa->id }}">
                                <input type="hidden" name="kelas" value="{{ $siswa->kelas }}">
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>
                                    <select name="status" class="form-select">
                                        <option value="Hadir">✅ Hadir</option>
                                        <option value="Alpha">❌ Alpa</option>
                                        <option value="Sakit">🤒 Sakit</option>
                                        <option value="Izin">✉️ Izin</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="mata_pelajaran" class="form-control" placeholder="Contoh: Matematika">
                                </td>
                                <td>
                                    <input type="text" name="guru" class="form-control" placeholder="Nama Guru">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-success">
                                        💾 Simpan
                                    </button>
                                </td>
                            </form>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center text-muted">⚠️ Tidak ada siswa untuk kelas yang dipilih.</p>
        @endif
    </div>
</div>
@endsection
