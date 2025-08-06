@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
    <h1 class="h2">Tambah Jadwal</h1>
</div>
<a href="/admin/guru/jadwal" class="btn btn-primary mb-3">Kembali</a>

<div class="col-lg-8">
    <form action="/admin/guru/jadwal/store" method="post">
        {{csrf_field()}}

        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam" value="{{ old('jam') }}">
            @error('jam')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <script>
            // Fungsi untuk mendapatkan waktu saat ini dalam format WIB
            function getCurrentTimeInWIB() {
                const options = {
                    timeZone: 'Asia/Jakarta',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false // Format 24 jam
                };

                const now = new Date().toLocaleString('en-US', options);
                return now;
            }

            // Mengatur nilai input dengan jam otomatis saat halaman dimuat
            document.addEventListener('DOMContentLoaded', function() {
                const jamInput = document.getElementById('jam');
                // Format jam ke format yang sesuai dengan input type="time" (HH:MM)
                const currentTime = getCurrentTimeInWIB().slice(0, 5);
                jamInput.value = currentTime; // Isi dengan waktu saat ini
            });
        </script>




        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <select name="hari" id="hari" class="form-control" required>
                <option>Pilih Hari</option>
                <option id="hari" name="hari">Senin</option>
                <option id="hari" name="hari">Selasa</option>
                <option id="hari" name="hari">Rabu</option>
                <option id="hari" name="hari">Kamis</option>
                <option id="hari" name="hari">Jumat</option>
                <option id="hari" name="hari">Sabtu</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="matapelajaran" class="form-label">Mata Pelajaran</label>
            <input type="text" class="form-control @error('matapelajaran') is-invalid @enderror" id="matapelajaran" name="matapelajaran" value="{{old('matapelajaran')}}">
            @error('matapelajaran')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="guru" class="form-label">guru</label>
            <input type="text" class="form-control @error('guru') is-invalid @enderror" id="guru" name="guru" value="{{old('guru')}}">
            @error('guru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-control" required>
                <option>Pilih kelas</option>
                <option id="kelas" name="kelas">10 A</option>
                <option id="kelas" name="kelas">10 B</option>
                <option id="kelas" name="kelas">10 C</option>
                <option id="kelas" name="kelas">11 A</option>
                <option id="kelas" name="kelas">11 B</option>
                <option id="kelas" name="kelas">11 C</option>
                <option id="kelas" name="kelas">12 A</option>
                <option id="kelas" name="kelas">12 B</option>
                <option id="kelas" name="kelas">11 C</option>
            </select>
        </div>

        <button type="submit" onclick="myFunction()" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection