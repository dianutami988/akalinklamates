@extends('dashboard.layouts.mainguru')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Profile Guru</h1>
</div>

<div class="col-lg-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Informasi Guru</h4>
            <p><strong>Nama:</strong> {{ $gurus->nama }}</p>
            <p><strong>Username:</strong> {{ $gurus->username }}</p>
            <p><strong>NIP:</strong> {{ $gurus->nip }}</p>
            <p><strong>Alamat:</strong> {{ $gurus->alamat }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $gurus->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
        </div>
    </div>
</div>
@endsection
