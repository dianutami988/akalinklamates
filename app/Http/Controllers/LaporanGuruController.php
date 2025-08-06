<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaporanGuruController extends Controller
{
    // Method untuk menampilkan data laporan
    public function index(Request $request)
    {
        $laporans = DB::table('laporans')->get();
        return view('Dashboard.Guru.laporanguru', ['laporans' => $laporans]);
    }

    // Method untuk menampilkan form tambah laporan
    public function create(Request $request)
    {
        return view('Dashboard.Guru.tambahlaporanguru');
    }

    // Method untuk menyimpan data laporan
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'kelas' => 'required|string|max:5',
            'waktu' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        DB::table('laporans')->insert([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('dashboard.laporanguru')->with('success', 'Laporan berhasil ditambahkan');
    }

    // Method untuk menghapus data laporan
    public function destroy($id)
    {
        DB::table('laporans')->where('id', $id)->delete();
        return redirect()->route('dashboard.laporanguru')->with('success', 'Laporan berhasil dihapus');
    }
}