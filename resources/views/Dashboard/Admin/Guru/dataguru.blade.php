@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Data Guru</h1>
</div>

<!-- Tombol Kembali ke Dashboard -->
<div class="mb-3">
  <a href="/admin/dashboard" class="btn btn-info">Kembali ke Dashboard</a>
</div>

{{-- Tabel Guru Laki-Laki --}}
<div class="mb-5">
  <div class="d-flex justify-content-between">
    <h3 style="color: #007bff;">Guru Laki-Laki</h3>
  </div>
  <div class="row justify-content-end">
    <div class="col-md-8">
      <form action="/admin/guru/search" method="GET" class="d-flex">
        <div class="input-group mb-3">
          <input type="search" class="form-control" placeholder="Cari Guru Laki-Laki..." name="search">
          <button class="btn btn-primary" type="submit"><span data-feather="search"></span></button>
        </div>
      </form>
    </div>
    <div class="col-md-4 text-end">
      <a href="/admin/guru/tambah?jeniskelamin=Laki-Laki" class="btn btn-primary">Tambah Guru</a>
    </div>
  </div>
  <table class="table table-striped table-sm" style="background-color: #eaf4ff; border: 1px solid #007bff;">
    <thead style="background-color: #007bff; color: white;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($guru->where('jeniskelamin', 'Laki-Laki') as $g)
      <tr>
        <td>{{ $g->id }}</td>
        <td>{{ $g->nama }}</td>
        <td>{{ $g->nip }}</td>
        <td>{{ $g->alamat }}</td>
        <td>
          <a href="/admin/guru/edit/{{ $g->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
          |
          <a href="#" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $g->id }}"><span data-feather="trash-2"></span></a>

          {{-- Modal Hapus --}}
          <div class="modal fade" id="hapus{{ $g->id }}" tabindex="-1" aria-labelledby="hapusModalLabel{{ $g->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="hapusModalLabel{{ $g->id }}">Hapus Data Guru</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Apakah Anda yakin ingin menghapus <b>{{ $g->nama }}</b>?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <a href="/admin/guru/hapus/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- Tabel Guru Perempuan --}}
<div>
  <div class="d-flex justify-content-between">
    <h3 style="color: #d63384;">Guru Perempuan</h3>
  </div>
  <div class="row justify-content-end">
    <div class="col-md-8">
      <form action="/admin/guru/search" method="GET" class="d-flex">
        <div class="input-group mb-3">
          <input type="search" class="form-control" placeholder="Cari Guru Perempuan..." name="search">
          <button class="btn btn-danger" type="submit"><span data-feather="search"></span></button>
        </div>
      </form>
    </div>
    <div class="col-md-4 text-end">
      <a href="/admin/guru/tambah?jeniskelamin=Perempuan" class="btn btn-danger">Tambah Guru</a>
    </div>
  </div>
  <table class="table table-striped table-sm" style="background-color: #ffeaf1; border: 1px solid #d63384;">
    <thead style="background-color: #d63384; color: white;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($guru->where('jeniskelamin', 'Perempuan') as $g)
      <tr>
        <td>{{ $g->id }}</td>
        <td>{{ $g->nama }}</td>
        <td>{{ $g->nip }}</td>
        <td>{{ $g->alamat }}</td>
        <td>
          <a href="/admin/guru/edit/{{ $g->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
          |
          <a href="#" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $g->id }}"><span data-feather="trash-2"></span></a>

          {{-- Modal Hapus --}}
          <div class="modal fade" id="hapus{{ $g->id }}" tabindex="-1" aria-labelledby="hapusModalLabel{{ $g->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="hapusModalLabel{{ $g->id }}">Hapus Data Guru</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Apakah Anda yakin ingin menghapus <b>{{ $g->nama }}</b>?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <a href="/admin/guru/hapus/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection