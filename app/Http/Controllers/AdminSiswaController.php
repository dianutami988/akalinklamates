<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Siswa;

class AdminSiswaController extends Controller
{
    public function index(Request $request)
    {
        $siswa = DB::table('siswas')->get();
        return view('Dashboard.Admin.Siswa.siswa', ['siswa' => $siswa]);
    }
    public function create()
    {
        // Logika untuk menampilkan form tambah data siswa
        return view('dashboard.admin.siswa.tambahsiswa');  // Sesuaikan dengan nama view yang Anda inginkan
    }
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:siswas,nip',
            'kelas' => 'required|string|max:5',
            'email' => 'required|email|unique:siswas,email',
            'jeniskelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data ke database
        Siswa::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password), // Hash password sebelum disimpan
        ]);

        // Redirect ke halaman data siswa dengan pesan sukses
        return redirect()->route('dashboard.admin.siswa.siswa')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswas')->where('id', $id)->get();
        return view('Dashboard.Admin.Siswa.editsiswa', ['siswa' => $siswa]);
    }

    public function update(Request $request)
    {
        DB::table('siswas')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
        ]);
        return redirect('/admin/siswa')->with('editedsiswa', true);
    }

    public function delete($id)
    {
        DB::table('siswas')->where('id', $id)->delete();
        return redirect('/admin/siswa')->with('deletedsiswa', true);
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $siswa = DB::table('siswas')->where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $siswa = DB::table('siswas');
        }
        return view('dashboard.admin.siswa.siswa', ['siswa' => $siswa]);
    }
}
