@extends('dashboard.layouts.mainguru')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Laporan</h1>
</div>
<a href="{{ route('dashboard.laporanguru') }}" class="btn btn-primary mb-3">Kembali</a>

<div class="col-lg-8">
    <form action="{{ route('dashboard.laporan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Guru</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-control" required>
                <option value="">Pilih kelas</option>
                <option value="10 A">10 A</option>
                <option value="10 B">10 B</option>
                <option value="11 A">11 A</option>
                <option value="11 B">11 B</option>
                <option value="12 A">12 A</option>
                <option value="12 B">12 B</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="waktu" class="form-label">Batas Materi</label>
            <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
            @error('waktu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection