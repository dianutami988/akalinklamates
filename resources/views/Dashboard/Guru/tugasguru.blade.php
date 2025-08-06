@extends('dashboard.layouts.mainguru')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">Unggah Tugas</h1>
</div>
<div class="col-lg-8">
    <form action="{{ route('guru.tugas.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <!-- Nama Guru -->
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Guru</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Mata Pelajaran -->
        <div class="mb-4">
            <label for="deskripsi" class="form-label">Mata Pelajaran</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
            @error('deskripsi')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Juudul Tugas -->
        <div class="mb-4">
            <label for="judul" class="form-label">Judul Tugas</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
            @error('judul')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Waktu Pengumpulan -->
        <div class="mb-4">
            <label for="waktu" class="form-label">Waktu Pengumpulan</label>
            <input type="datetime-local" name="waktu" id="waktu" class="form-control @error('waktu') is-invalid @enderror" required>
            @error('waktu')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Kelas -->
        <div class="mb-4">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-select @error('kelas') is-invalid @enderror">
                <option value="">Pilih Kelas</option>
                <option value="10 A">10 A</option>
                <option value="10 B">10 B</option>
                <option value="11 A">11 A</option>
                <option value="11 B">11 B</option>
                <option value="12 A">12 A</option>
                <option value="12 B">12 B</option>
            </select>
            @error('kelas')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- File Tugas -->
        <div class="mb-4">
            <label for="file" class="form-label">File Tugas</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') }}">
            @error('file')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4">Tambah Tugas</button>
        </div>
    </form>
</div>
@endsection