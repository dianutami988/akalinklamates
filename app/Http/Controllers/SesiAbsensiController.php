<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SesiAbsensi;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SesiAbsensiController extends Controller
{
    // Menampilkan form dan memproses penyimpanan dalam satu halaman
    public function createAndStore(Request $request)
    {
        $sesiAbsensi = null;

        if ($request->isMethod('post')) {
            $request->validate([
                'tipe' => 'required|string|in:Masuk,Pulang',
                'status' => 'required|string',
                'kelas' => 'required|string',
                'tanggal' => 'required|date',
                'deskripsi' => 'nullable|string',
                'guru' => 'required|string',
                'mata_pelajaran' => 'required|string'
            ]);

            $sesiAbsensi = SesiAbsensi::create([
                'tipe' => $request->tipe,
                'status' => $request->status,
                'kelas' => $request->kelas,
                'tanggal' => $request->tanggal,
                'deskripsi' => $request->deskripsi,
                'guru' => $request->guru,
                'mata_pelajaran' => $request->mata_pelajaran
            ]);
        }

        return view('dashboard.guru.absensibarcode', compact('sesiAbsensi'));
    }

    // Menampilkan form absensi manual
    public function manualAttendance(Request $request)
    {
        $sesiAbsensi = null;

        if ($request->isMethod('post')) {
            $request->validate([
                'nama_siswa' => 'required|string',
                'kelas' => 'required|string',
                'status' => 'required|string|in:Hadir,Alpa,Sakit,Izin',
                'tanggal' => 'required|date',
                'keterangan' => 'nullable|string',
            ]);

            $sesiAbsensi = SesiAbsensi::create([
                'nama_siswa' => $request->nama_siswa,
                'kelas' => $request->kelas,
                'status' => $request->status,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
            ]);
        }

        return view('dashboard.guru.absensimanual', compact('sesiAbsensi'));
    }
}
