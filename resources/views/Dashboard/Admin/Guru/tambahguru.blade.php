@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Guru</h1>
</div>
<a href="/admin/guru" class="btn btn-primary mb-3">Kembali</a>

<div class="col-lg-8">
    <form action="/admin/guru/store" method="post">
        {{csrf_field()}}

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Guru</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
            @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{old('username')}}">
            @error('username')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="nip" class="form-label">nip </label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{old('nip')}}">
            @error('nip')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{old('alamat')}}">
            @error('alamat')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select name="jeniskelamin" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jeniskelamin')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>


        <button type="submit" onclick="myFunction()" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection