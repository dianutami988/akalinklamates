<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class TugasController extends Controller
{
    public function index()
    {
        $totalPengumpulanTugas = \App\Models\PengumpulanTugas::count();
        $totalMateri = \App\Models\Materi::count();
        $totalTugas = \App\Models\Tugas::count();
        $totalLaporan = \App\Models\Laporan::count();
        $totalAbsensi = \App\Models\Absensi::count();

        return view('Dashboard.Guru.dashboardguru', [
            'totalPengumpulanTugas' => $totalPengumpulanTugas,
            'totalMateri' => $totalMateri,
            'totalTugas' => $totalTugas,
            'totalLaporan' => $totalLaporan,
            'totalAbsensi' => $totalAbsensi
        ]);
    }

    public function create()
    {
        return view('Dashboard.Guru.tugasguru');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'waktu' => 'required|date_format:Y-m-d\TH:i',
            'kelas' => 'required|string|max:100',
            'file' => 'required|mimes:pdf,docx,zip,jpg,png|max:10240',
        ]);

        // Simpan file di public/storage/uploads/tugas
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->storeAs(
                'uploads/tugas',
                time() . '_' . $request->file('file')->getClientOriginalName(),
                'public'
            );
        }

        // Simpan data ke database
        Tugas::create([
            'judul' => $request->input('judul'),
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'waktu' => $request->input('waktu'),
            'kelas' => $request->input('kelas'),
            'file' => $filePath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard.guru.tugasguru')->with('add', true);
    }
}
