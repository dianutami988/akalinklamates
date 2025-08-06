@extends('dashboard.layouts.mainguru')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">Data Laporan Guru</h1>
    <a href="{{ route('dashboard.laporan.create') }}" class="btn btn-primary">Tambah Data</a>
</div>

<!-- Tabel Data Laporan -->
<div class="table-responsive mb-4">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Guru</th>
                <th>Judul</th>
                <th>Kelas</th>
                <th>Batas Materi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporans as $laporan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $laporan->nama }}</td>
                    <td>{{ $laporan->judul }}</td>
                    <td>{{ $laporan->kelas }}</td>
                    <td>{{ $laporan->waktu }}</td>
                    <td>
                        <form action="{{ route('dashboard.laporan.delete', $laporan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection