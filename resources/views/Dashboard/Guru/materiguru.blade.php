@extends('dashboard.layouts.mainguru')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">Unggah Materi Belajar</h1>
</div>
<div class="col-lg-8">
    <form action="{{ route('guru.materi.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <!-- Judul Materi -->
        <div class="mb-4">
            <label for="judul_materi" class="form-label">Judul Materi</label>
            <input type="text" class="form-control @error('judul_materi') is-invalid @enderror" id="judul_materi" name="judul_materi" value="{{ old('judul_materi') }}">
            @error('judul_materi')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Nama Guru -->
        <div class="mb-4">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" id="nama_guru" name="nama_guru" value="{{ old('nama_guru') }}">
            @error('nama_guru')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Mata Pelajaran -->
        <div class="mb-4">
            <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
            <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror" id="mata_pelajaran" name="mata_pelajaran" value="{{ old('mata_pelajaran') }}">
            @error('mata_pelajaran')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Waktu Dibagikan -->
        <div class="mb-4">
            <label for="waktu_dibagikan" class="form-label">Waktu Dibagikan</label>
            <input type="datetime-local" name="waktu_dibagikan" id="waktu_dibagikan" class="form-control @error('waktu_dibagikan') is-invalid @enderror" required>
            @error('waktu_dibagikan')
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

        <!-- File Materi -->
        <div class="mb-4">
            <label for="file_materi" class="form-label">File Materi</label>
            <input type="file" class="form-control @error('file_materi') is-invalid @enderror" id="file_materi" name="file_materi" value="{{ old('file_materi') }}">
            @error('file_materi')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4">Unggah Materi</button>
        </div>
    </form>
</div>
@endsection
