<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Siswa; // Import model Siswa
use Carbon\Carbon;

class AbsensiApiController extends Controller
{
    /**
     * Menyimpan data absensi berdasarkan hasil scan barcode dan ID siswa yang dikirim.
     */
    public function store(Request $request)
    {
        // Validasi input request
        $request->validate([
            'id_siswa' => 'required|integer', // Ganti 'id' menjadi 'id_siswa'
            'kelas' => 'required|string',
            'id_sesi' => 'required|integer',
            'guru' => 'required|string',
            'mata_pelajaran' => 'required|string',
            'barcode_data' => 'required|string',
        ]);

        // Cari siswa berdasarkan id_siswa yang dikirim
        $siswa = Siswa::find($request->id_siswa);

        if (!$siswa) {
            return response()->json([
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        // Simpan data absensi
        $absensi = Absensi::create([
            'id_siswa' => $siswa->id,
            'kelas' => $request->kelas,
            'waktu_absen' => Carbon::now(),
            'status' => 'Hadir',
            'id_sesi' => $request->id_sesi,
            'guru' => $request->guru,
            'mata_pelajaran' => $request->mata_pelajaran,
            'barcode_data' => $request->barcode_data,
        ]);

        return response()->json([
            'message' => 'Absensi berhasil disimpan',
            'data' => $absensi
        ], 201);
    }
}
