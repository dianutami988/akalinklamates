@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Update Data Siswa</h1>
</div>
<a href="/admin/siswa" class="btn btn-primary mb-3">Kembali</a><br>
<div class="col-lg-8">
    <form action="/admin/siswa/update" method="post" >
        {{csrf_field()}}
        @foreach($siswa as $s)
            <input type="hidden" name="id" value="{{$s->id}}">

            <label for="id">Id</label><br>
            <input type="text" class="form-control" readonly="" name="id" value="{{$s->id}}"><br>

            <label for="nama">Nama Siswa</label><br>
            <input type="text" class="form-control" name="nama" value="{{$s->nama}}"> <br>

            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <select name="kelas" id="kelas" class="form-control" required >
                <option>{{$s->kelas}}</option>
                <option id="kelas" name="kelas">10 A</option>
                <option id="kelas" name="kelas">10 B</option>
                <option id="kelas" name="kelas">10 C</option>
                <option id="kelas" name="kelas">11 A</option>
                <option id="kelas" name="kelas">11 B</option>
                <option id="kelas" name="kelas">11 C </option>
                <option id="kelas" name="kelas">12 A</option>
                <option id="kelas" name="kelas">12 B</option>
                <option id="kelas" name="kelas">12 C </option>

              </select>
            </div>

            <label for="email">Email</label><br>
            <input type="text" class="form-control" name="email" value="{{$s->email}}"> <br>

            <label for="nip">Nis</label><br>
            <input type="text" class="form-control" name="nip" value="{{$s->nip}}"> <br>

            <label for="alamat">Alamat</label><br>
            <input type="text" class="form-control" name="alamat" value="{{$s->alamat}}"> <br>
                        
            <div class="mb-3">
              <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
              <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                <option>{{$s->jeniskelamin}}</option>
                <option id="jeniskelamin" name="jeniskelamin">Laki-Laki</option>
                <option id="jeniskelamin" name="jeniskelamin">Perempuan</option>
              </select>
            </div>

            <input class=" btn btn-primary" type="submit" value="Update" onclick="myFunction()">
    </form>
    @endforeach
</div>
@endsection