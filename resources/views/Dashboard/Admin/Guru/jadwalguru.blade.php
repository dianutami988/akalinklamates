@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Jadwal Mengajar</h1>
</div>

<div class="table-responsive">
  <a href="/admin/guru/jadwal/tambah" class="btn btn-primary mb-3 tambah"><span data-feather="plus"></span> Tambahkan</a>

  <div class="row justify-content-end">
    <div class="col-md-3">
      <form action="/admin/guru/jadwal/search" method="GET">
        <div class="input-group mb-3">
          <select name="search" id="kelas" class="form-control" required type="search" placeholder="Cari Kelas.....">
            <option>Pilih kelas</option>
            <option>10 A</option>
            <option>10 B</option>
            <option>10 C</option>
            <option>11 A</option>
            <option>11 B</option>
            <option>12 A</option>
            <option>12 B</option>
          </select>
          <button class="btn btn-dark" type="submit"><span data-feather="search"></span></button>
        </div>
      </form>
    </div>
  </div>

  <!-- Tabel Jadwal Mengajar -->
  <div class="table-bordered-wrapper mt-4">

    <!-- Kelas 10 -->
    <div class="kelas-frame bg-primary text-white p-2 mb-3">
      <strong>Kelas 10</strong>
    </div>
    <table class="table table-striped table-sm table-bordered border-colored mb-5">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" colspan="5" class="text-center">Hari</th>
          <th scope="col">Opsi</th>
        </tr>
        <tr>
          <th scope="col"></th>
          <th scope="col">Senin</th>
          <th scope="col">Selasa</th>
          <th scope="col">Rabu</th>
          <th scope="col">Kamis</th>
          <th scope="col">Jumat</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($jadwal as $index => $j)
        @if(str_contains($j->kelas, '10'))
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>
            @if($j->hari == 'Senin')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Selasa')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Rabu')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Kamis')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Jumat')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            <a href="/admin/guru/jadwal/editjd/{{$j->id}}" class="badge bg-warning text-dark"><span data-feather="edit"></span></a>
            |
            <a href="/admin/guru/jadwal/hapusjd/{{$j->id}}" class="badge bg-danger text-white" data-bs-toggle="modal" data-bs-target="#hapus{{ $j->id }}"><span data-feather="trash-2"></span></a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>

    <!-- Kelas 11 -->
    <div class="kelas-frame bg-success text-white p-2 mb-3">
      <strong>Kelas 11</strong>
    </div>
    <table class="table table-striped table-sm table-bordered border-colored mb-5">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" colspan="5" class="text-center">Hari</th>
          <th scope="col">Opsi</th>
        </tr>
        <tr>
          <th scope="col"></th>
          <th scope="col">Senin</th>
          <th scope="col">Selasa</th>
          <th scope="col">Rabu</th>
          <th scope="col">Kamis</th>
          <th scope="col">Jumat</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($jadwal as $index => $j)
        @if(str_contains($j->kelas, '11'))
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>
            @if($j->hari == 'Senin')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Selasa')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Rabu')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Kamis')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Jumat')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            <a href="/admin/guru/jadwal/editjd/{{$j->id}}" class="badge bg-warning text-dark"><span data-feather="edit"></span></a>
            |
            <a href="/admin/guru/jadwal/hapusjd/{{$j->id}}" class="badge bg-danger text-white" data-bs-toggle="modal" data-bs-target="#hapus{{ $j->id }}"><span data-feather="trash-2"></span></a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>

    <!-- Kelas 12 -->
    <div class="kelas-frame bg-warning text-dark p-2 mb-3">
      <strong>Kelas 12</strong>
    </div>
    <table class="table table-striped table-sm table-bordered border-colored">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" colspan="5" class="text-center">Hari</th>
          <th scope="col">Opsi</th>
        </tr>
        <tr>
          <th scope="col"></th>
          <th scope="col">Senin</th>
          <th scope="col">Selasa</th>
          <th scope="col">Rabu</th>
          <th scope="col">Kamis</th>
          <th scope="col">Jumat</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($jadwal as $index => $j)
        @if(str_contains($j->kelas, '12'))
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>
            @if($j->hari == 'Senin')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Selasa')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Rabu')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Kamis')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            @if($j->hari == 'Jumat')
            <p><strong>Jam:</strong> {{ $j->jam }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $j->matapelajaran }}</p>
            <p><strong>Guru:</strong> {{ $j->guru }}</p>
            <p><strong>Kelas:</strong> {{ $j->kelas }}</p>
            @endif
          </td>
          <td>
            <a href="/admin/guru/jadwal/editjd/{{$j->id}}" class="badge bg-warning text-dark"><span data-feather="edit"></span></a>
            |
            <a href="/admin/guru/jadwal/hapusjd/{{$j->id}}" class="badge bg-danger text-white" data-bs-toggle="modal" data-bs-target="#hapus{{ $j->id }}"><span data-feather="trash-2"></span></a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>

  </div>
</div>

<style>
  /* Menambahkan warna sesuai dengan kelas */
  .kelas-frame.bg-primary {
    background-color: #007bff;
  }

  .kelas-frame.bg-success {
    background-color: #28a745;
  }

  .kelas-frame.bg-warning {
    background-color: #ffc107;
  }

  /* Menambahkan warna sesuai dengan kelas */
  .kelas-frame.bg-primary {
    background-color: #007bff;
  }

  .kelas-frame.bg-success {
    background-color: #28a745;
  }

  .kelas-frame.bg-warning {
    background-color: #ffc107;
  }

  .kelas-frame.text-white {
    color: #fff;
  }

  .kelas-frame.text-dark {
    color: #343a40;
  }

  .table-bordered-wrapper {
    border: 1px solid #dee2e6;
    padding: 20px;
  }

  .table-bordered-wrapper table {
    width: 100%;
    margin-bottom: 20px;
  }

  .badge.bg-warning {
    background-color: #ffc107;
  }

  .badge.bg-danger {
    background-color: #dc3545;
  }

  .badge.bg-primary {
    background-color: #007bff;
  }

  .badge.bg-success {
    background-color: #28a745;
  }

  <
</style>

@endsection