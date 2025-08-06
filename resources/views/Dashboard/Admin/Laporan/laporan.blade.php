@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Laporan Guru</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Guru</th>
        <th>Judul</th>
        <th>Kelas</th>
        <th>Batas Materi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($laporan as $laporan)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $laporan->nama }}</td>
        <td>{{ $laporan->judul }}</td>
        <td>{{ $laporan->kelas }}</td>
        <td>{{ $laporan->waktu }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection