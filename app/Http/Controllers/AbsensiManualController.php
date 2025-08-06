<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsensiManualController extends Controller
{
    public function index(Request $request)
    {
        // Ambil daftar kelas unik dari tabel siswa
        $kelasList = Siswa::select('kelas')->distinct()->pluck('kelas');

        // Filter siswa berdasarkan kelas yang dipilih
        $kelas = $request->input('kelas');
        $siswas = Siswa::when($kelas, function ($query, $kelas) {
            return $query->where('kelas', $kelas);
        })->get();

        return view('dashboard.guru.absensimanual', compact('kelasList', 'siswas', 'kelas'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswas,id',
            'kelas' => 'required|string',
            'status' => 'required|string|in:Hadir,Alpha,Sakit,Izin',
            'mata_pelajaran' => 'required|string',
            'guru' => 'required|string',
        ]);

        // Ambil data siswa berdasarkan ID
        $siswa = Siswa::find($validated['id_siswa']);

        if ($siswa) {
            Absensi::create([
                'id_siswa' => $siswa->id,
                'kelas' => $siswa->kelas, // Menggunakan kelas dari data siswa
                'waktu_absen' => now(),
                'status' => $validated['status'],
                'id_sesi' => $request->id_sesi ?? 1,
                'guru' => $validated['guru'],
                'mata_pelajaran' => $validated['mata_pelajaran'],
                'barcode_data' => null,
            ]);
        }

        return redirect()->route('guru.absensi.manual')
            ->with('success', "✅ Absensi berhasil disimpan untuk siswa {$siswa->nama}.");
    }

}
