@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Data Siswa</h1>

</div>

<!-- Pencarian -->
<div class="row justify-content-end">
  <div class="col-md-6 d-flex justify-content-between">
    <form action="/admin/siswa/search" method="GET" class="w-100">
      <div class="input-group mb-3">
        <input type="search" class="form-control" placeholder="Cari Siswa....." name="search">
        <button class="btn btn-dark" type="submit"><span data-feather="search"></span></button>
      </div>
    </form>
    <a href="/admin/siswa/tambah" class="btn btn-primary align-self-center">Tambah Murid</a>
  </div>
</div>


<!-- Tampilan Kelas 10 -->
<div class="kelas-10 mb-4 p-3 border border-dark rounded" style="background-color: #d1e7ff;">
  <h3 class="text-primary">Kelas 10</h3>
  <div class="table-responsive">
    <table class="table table-striped table-sm" style="background-color: white;">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Kelas</th>
          <th scope="col">Email</th>
          <th scope="col">Nis</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($siswa as $s)
        @if(str_contains($s->kelas, '10'))
        <tr>
          <td>{{ $s->id }}</td>
          <td>{{ $s->nama }}</td>
          <td>{{ $s->kelas }}</td>
          <td>{{ $s->email }}</td>
          <td>{{ $s->nip }}</td>
          <td>{{ $s->alamat }}</td>
          <td>{{ $s->jeniskelamin }}</td>
          <td>
            <a href="/admin/siswa/editds/{{$s->id}}" class="badge bg-warning"><span data-feather="edit"></span></a>
            |
            <a href="/admin/siswa/hapusds/{{$s->id}}" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $s->id }}"><span data-feather="trash-2"></span></a>
            <!-- Modal untuk Hapus -->
            <div class="modal fade" id="hapus{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus <b>{{ $s->nama }}</b>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/admin/siswa/hapusds/{{$s->id}}" class="btn btn-danger">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Tampilan Kelas 11 -->
<div class="kelas-11 mb-4 p-3 border border-dark rounded" style="background-color: #c3e6cb;">
  <h3 class="text-success">Kelas 11</h3>
  <div class="table-responsive">
    <table class="table table-striped table-sm" style="background-color: white;">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Kelas</th>
          <th scope="col">Email</th>
          <th scope="col">Nis</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($siswa as $s)
        @if(str_contains($s->kelas, '11'))
        <tr>
          <td>{{ $s->id }}</td>
          <td>{{ $s->nama }}</td>
          <td>{{ $s->kelas }}</td>
          <td>{{ $s->email }}</td>
          <td>{{ $s->nip }}</td>
          <td>{{ $s->alamat }}</td>
          <td>{{ $s->jeniskelamin }}</td>
          <td>
            <a href="/admin/siswa/editds/{{$s->id}}" class="badge bg-warning"><span data-feather="edit"></span></a>
            |
            <a href="/admin/siswa/hapusds/{{$s->id}}" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $s->id }}"><span data-feather="trash-2"></span></a>
            <!-- Modal untuk Hapus -->
            <div class="modal fade" id="hapus{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus <b>{{ $s->nama }}</b>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/admin/siswa/hapusds/{{$s->id}}" class="btn btn-danger">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Tampilan Kelas 12 -->
<div class="kelas-12 mb-4 p-3 border border-dark rounded" style="background-color: #ffeeba;">
  <h3 class="text-warning">Kelas 12</h3>
  <div class="table-responsive">
    <table class="table table-striped table-sm" style="background-color: white;">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Kelas</th>
          <th scope="col">Email</th>
          <th scope="col">Nis</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($siswa as $s)
        @if(str_contains($s->kelas, '12'))
        <tr>
          <td>{{ $s->id }}</td>
          <td>{{ $s->nama }}</td>
          <td>{{ $s->kelas }}</td>
          <td>{{ $s->email }}</td>
          <td>{{ $s->nip }}</td>
          <td>{{ $s->alamat }}</td>
          <td>{{ $s->jeniskelamin }}</td>
          <td>
            <a href="/admin/siswa/editds/{{$s->id}}" class="badge bg-warning"><span data-feather="edit"></span></a>
            |
            <a href="/admin/siswa/hapusds/{{$s->id}}" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $s->id }}"><span data-feather="trash-2"></span></a>
            <!-- Modal untuk Hapus -->
            <div class="modal fade" id="hapus{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus <b>{{ $s->nama }}</b>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/admin/siswa/hapusds/{{$s->id}}" class="btn btn-danger">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection