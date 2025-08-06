<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalApiController extends Controller
{
    /**
     * Menampilkan semua data jadwal.
     */
    public function index()
    {
        $jadwals = Jadwal::all();

        return response()->json([
            'message' => 'Data jadwal berhasil diambil',
            'data' => $jadwals
        ], 200);
    }

    /**
     * Menampilkan data jadwal berdasarkan ID.
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);

        if (!$jadwal) {
            return response()->json([
                'message' => 'Data jadwal tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'message' => 'Data jadwal berhasil diambil',
            'data' => $jadwal
        ], 200);
    }
}
