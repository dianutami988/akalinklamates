<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(Request $request){

        $totalGuru = \App\Models\Guru::count();
        $totalSiswa = \App\Models\Siswa::count();
        $totalLaporan = \App\Models\Laporan::count();
        $totalKalender = \App\Models\Kalender::count();

        return view('Dashboard.Admin.index', [
            'totalGuru' => $totalGuru,
            'totalSiswa' => $totalSiswa,
            'totalLaporan' => $totalLaporan,
            'totalKalender' => $totalKalender
        ]);
    }
    
}
