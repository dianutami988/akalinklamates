<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderApiController extends Controller
{
    // Menampilkan semua data kalender
    public function index()
    {
        $kalender = Kalender::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Kalender',
            'data' => $kalender,
        ], 200);
    }

    // Menampilkan detail kalender berdasarkan ID
    public function show($id)
    {
        $kalender = Kalender::find($id);

        if (!$kalender) {
            return response()->json([
                'success' => false,
                'message' => 'Data Kalender tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Kalender',
            'data' => $kalender,
        ], 200);
    }
}
