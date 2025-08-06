@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
  <h1 class="h2">Update Data Guru</h1>
</div>
<a href="/admin/guru" class="btn btn-success mb-3">Kembali</a><br>
<div class="col-lg-8">
    <form action="/admin/guru/update" method="post" >
        {{csrf_field()}}
        @foreach($guru as $g)
            <input type="hidden" name="id" value="{{$g->id}}">

            <label for="id">Id</label><br>
            <input type="text" class="form-control" readonly="" name="id" value="{{$g->id}}"><br>

            <label for="nama">Nama Guru</label><br>
            <input type="text" class="form-control" name="nama" value="{{$g->nama}}"> <br>

            <label for="nip">Nip</label><br>
            <input type="text" class="form-control" name="nip" value="{{$g->nip}}"> <br>

            <label for="alamat">Alamat</label><br>
            <input type="text" class="form-control" name="alamat" value="{{$g->alamat}}"> <br>
                        
            <div class="mb-3">
              <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
              <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                <option>{{$g->jeniskelamin}}</option>
                <option id="jeniskelamin" name="jeniskelamin">Laki-Laki</option>
                <option id="jeniskelamin" name="jeniskelamin">Perempuan</option>
              </select>
            </div>

            <input class=" btn btn-primary" type="submit" value="Update" onclick="myFunction()">
    </form>
    @endforeach
</div>
@endsection