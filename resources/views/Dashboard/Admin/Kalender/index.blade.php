@extends('dashboard.layouts.main')

@section('title', 'Daftar Kalender Akademik')

@section('container')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Kalender Akademik</h1>
    
    {{-- Tombol Tambah Data --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.kalender.create') }}" class="btn btn-primary">Tambah Kalender</a>
    </div>

    {{-- Pesan Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel Kalender Akademik --}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kalenders as $index => $kalender)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kalender->nama }}</td>
                    <td>{{ \Carbon\Carbon::parse($kalender->tanggal)->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('admin.kalender.edit', $kalender->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ route('admin.kalender.destroy', $kalender->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data kalender tersedia.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
