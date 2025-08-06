@extends('dashboard.layouts.mainguru')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">🗓️ Buat Sesi Absensi</h1>
</div>

<div class="row g-4">
    <!-- Formulir Sesi Absensi -->
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5><i class="fas fa-calendar-plus"></i> Formulir Sesi Absensi</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('guru.absensibarcode') }}" method="POST">
                    @csrf
                    <!-- Tipe Absensi -->
                    <div class="mb-3">
                        <label for="tipe" class="form-label fw-bold">📊 Tipe Absensi</label>
                        <select class="form-select" id="tipe" name="tipe" required>
                            <option value="" disabled selected>Pilih Tipe</option>
                            <option value="Masuk">Masuk</option>
                            <option value="Pulang">Pulang</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label fw-bold">🟢 Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>

                    <!-- Kelas -->
                    <div class="mb-3">
                        <label for="kelas" class="form-label fw-bold">🏫 Kelas</label>
                        <select class="form-select" id="kelas" name="kelas" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <optgroup label="Kelas 10">
                                <option value="10A">10A</option>
                                <option value="10B">10B</option>
                                <option value="10C">10C</option>
                            </optgroup>
                            <optgroup label="Kelas 11">
                                <option value="11A">11A</option>
                                <option value="11B">11B</option>
                                <option value="11C">11C</option>
                            </optgroup>
                            <optgroup label="Kelas 12">
                                <option value="12A">12A</option>
                                <option value="12B">12B</option>
                                <option value="12C">12C</option>
                            </optgroup>
                        </select>
                    </div>

                    <!-- Mata Pelajaran -->
                    <div class="mb-3">
                        <label for="mata_pelajaran" class="form-label fw-bold">📚 Mata Pelajaran</label>
                        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" placeholder="Contoh: Matematika" required>
                    </div>

                    <!-- Guru -->
                    <div class="mb-3">
                        <label for="guru" class="form-label fw-bold">👤 Guru</label>
                        <input type="text" class="form-control" id="guru" name="guru" placeholder="Nama Guru" required>
                    </div>

                    <!-- Tanggal -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label fw-bold">📅 Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-bold">📝 Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">💾 Simpan dan Tampilkan Barcode</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Hasil Sesi Absensi -->
    @if ($sesiAbsensi)
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white">
                <h5><i class="fas fa-check-circle"></i> Sesi Absensi Berhasil Dibuat!</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>📊 Tipe Absensi:</strong> {{ $sesiAbsensi->tipe }}</li>
                    <li class="list-group-item"><strong>🟢 Status:</strong> {{ $sesiAbsensi->status }}</li>
                    <li class="list-group-item"><strong>🏫 Kelas:</strong> {{ $sesiAbsensi->kelas }}</li>
                    <li class="list-group-item"><strong>📚 Mata Pelajaran:</strong> {{ $sesiAbsensi->mata_pelajaran }}</li>
                    <li class="list-group-item"><strong>👤 Guru:</strong> {{ $sesiAbsensi->guru }}</li>
                    <li class="list-group-item"><strong>📅 Tanggal:</strong> {{ $sesiAbsensi->tanggal }}</li>
                </ul>

                <div class="text-center mt-4">
                    <h5>📲 Barcode Absensi</h5>
                    <div class="d-flex justify-content-center">
                        {!! QrCode::size(200)->generate("Sesi ID: {$sesiAbsensi->id}, Tipe: {$sesiAbsensi->tipe}, Kelas: {$sesiAbsensi->kelas}, Mata Pelajaran: {$sesiAbsensi->mata_pelajaran}, Guru: {$sesiAbsensi->guru}, Tanggal: {$sesiAbsensi->tanggal}") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
