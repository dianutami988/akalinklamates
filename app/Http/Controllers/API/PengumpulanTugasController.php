<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PengumpulanTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumpulanTugasController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'judul' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Tentukan jalur penyimpanan
        $uploadPath = 'uploads/pengumpulan_tugas';
        $fileName = time() . '_' . $request->file('file')->getClientOriginalName();

        // Simpan file di direktori public/storage/uploads/tugas/pengumpulan_tugas
        $filePath = $request->file('file')->storeAs($uploadPath, $fileName, 'public');

        // Simpan data ke database
        $tugas = PengumpulanTugas::create([
            'nama_siswa' => $validated['nama_siswa'],
            'kelas' => $validated['kelas'],
            'judul' => $validated['judul'],
            'mapel' => $validated['mapel'],
            'file' => $filePath,
            'waktu_pengumpulan' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Tugas berhasil dikumpulkan',
            'data' => $tugas
        ], 201);
    }
}