<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    // Method untuk menampilkan halaman absensi
    public function index(Request $request)
    {
        // Mengambil data absensi dan menambahkan nama siswa dari tabel siswas
        $query = DB::table('absensis')
            ->leftJoin('siswas', 'absensis.id_siswa', '=', 'siswas.id')
            ->select('absensis.*', 'siswas.nama as nama_siswa');

        // Filter berdasarkan kelas jika ada
        if ($request->has('kelas')) {
            $query->where('siswas.kelas', $request->kelas);
        }

        $absensi = $query->get();

        // Mengambil daftar kelas untuk dropdown filter
        $kelasList = DB::table('siswas')->distinct()->pluck('kelas');

        return view('dashboard.guru.absensi', [
            'absensi' => $absensi,
            'kelasList' => $kelasList,
            'selectedKelas' => $request->kelas
        ]);
    }

    // Method untuk menampilkan rekap absensi per siswa
    public function rekapSiswa(Request $request)
    {
        // Mengambil data rekap absensi per siswa
        $query = DB::table('absensis')
            ->leftJoin('siswas', 'absensis.id_siswa', '=', 'siswas.id')
            ->select(
                'siswas.nama as nama_siswa',
                'siswas.kelas',
                DB::raw('COUNT(CASE WHEN absensis.status = "Hadir" THEN 1 END) as hadir'),
                DB::raw('COUNT(CASE WHEN absensis.status = "Izin" THEN 1 END) as izin'),
                DB::raw('COUNT(CASE WHEN absensis.status = "Sakit" THEN 1 END) as sakit'),
                DB::raw('COUNT(CASE WHEN absensis.status = "Alpha" THEN 1 END) as alpha')
            )
            ->groupBy('siswas.id', 'siswas.nama', 'siswas.kelas');

        // Filter berdasarkan kelas jika ada
        if ($request->has('kelas')) {
            $query->where('siswas.kelas', $request->kelas);
        }

        // Filter berdasarkan periode (bulan dan tahun)
        if ($request->has('bulan') && $request->has('tahun')) {
            $query->whereMonth('absensis.waktu_absen', $request->bulan)
                  ->whereYear('absensis.waktu_absen', $request->tahun);
        }

        $rekapSiswa = $query->get();

        // Mengambil daftar kelas untuk dropdown filter
        $kelasList = DB::table('siswas')->distinct()->pluck('kelas');

        return view('dashboard.guru.rekap-siswa', [
            'rekapSiswa' => $rekapSiswa,
            'kelasList' => $kelasList,
            'selectedKelas' => $request->kelas,
            'selectedBulan' => $request->bulan,
            'selectedTahun' => $request->tahun
        ]);
    }
}