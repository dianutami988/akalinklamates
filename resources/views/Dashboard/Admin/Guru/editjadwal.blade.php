@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Update Data Guru</h1>
</div>
<a href="/admin/guru/jadwal" class="btn btn-success mb-3">Kembali</a><br>
<div class="col-lg-8">
    <form action="/admin/guru/jadwal/update" method="post" >
        {{csrf_field()}}
        @foreach($jadwal as $j)
            <input type="hidden" name="id" value="{{$j->id}}">

            <label for="id">Id</label><br>
            <input type="text" class="form-control" readonly="" name="id" value="{{$j->id}}"><br>

            <label for="jam">Jam</label><br>
            <input type="text" class="form-control" name="jam" value="{{$j->jam}}"> <br>

            <div class="mb-3">
              <label for="hari" class="form-label">Hari</label>
              <select name="hari" id="hari" class="form-control" required>
                <option>{{$j->hari}}</option>
                <option id="hari" name="hari">Senin</option>
                <option id="hari" name="hari">Selasa</option>
                <option id="hari" name="hari">Rabu</option>
                <option id="hari" name="hari">Kamis</option>
                <option id="hari" name="hari">Jumat</option>
                <option id="hari" name="hari">Sabtu</option>
              </select>
            </div>

            <label for="matapelajaran">Mata Pelajaran</label><br>
            <input type="text" class="form-control" name="matapelajaran" value="{{$j->matapelajaran}}"> <br>

            <label for="guru">Mata Pelajaran</label><br>
            <input type="text" class="form-control" name="guru" value="{{$j->guru}}"> <br>

            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <select name="kelas" id="kelas" class="form-control" required>
                <option>{{$j->kelas}}</option>
                <option id="kelas" name="kelas">10 A</option>
                <option id="kelas" name="kelas">10 B</option>
                <option id="kelas" name="kelas">11 A</option>
                <option id="kelas" name="kelas">11 B</option>
                <option id="kelas" name="kelas">12 A</option>
                <option id="kelas" name="kelas">12 B</option>
              </select>
            </div>

            <input class=" btn btn-primary" type="submit" value="Update" onclick="myFunction()">
    </form>
    @endforeach
</div>
@endsection