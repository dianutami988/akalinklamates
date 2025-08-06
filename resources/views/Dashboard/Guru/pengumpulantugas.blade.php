@extends('dashboard.layouts.mainguru')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
        <h1 class="h2">Data Pengumpulan Tugas</h1>
    </div>

    <div class="table-responsive">
        <div class="row justify-content-end">
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Cari Siswa....." name="search">
                        <button class="btn btn-dark" type="submit">
                            <span data-feather="search"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Mapel</th>
                    <th scope="col">File</th>
                    <th scope="col">Waktu Pengumpulan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengumpulan as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_siswa }}</td>
                        <td>{{ $p->kelas }}</td>
                        <td>{{ $p->judul }}</td>
                        <td>{{ $p->mapel }}</td>
                        <td>
                            @if ($p->file)
                                <a href="{{ asset('storage/' . str_replace('public/', '', $p->file)) }}" target="_blank">
                                    Klik untuk mengunduh file
                                </a>
                            @else
                                Tidak ada file
                            @endif
                        </td>                        
                        <td>{{ $p->waktu_pengumpulan }}</td>
                        <td>
                            {{-- Tombol Hapus --}}
                            <form action="{{ route('pengumpulan.destroy', $p->id) }}" method="POST"
                                style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="badge bg-danger border-0">
                                    <span data-feather="trash-2"></span> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
