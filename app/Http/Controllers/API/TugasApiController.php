<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class TugasApiController extends Controller
{
    // Menampilkan semua data tugas
    public function index()
    {
        $tugas = Tugas::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Tugas',
            'data' => $tugas,
        ], 200);
    }

    // Menampilkan data tugas berdasarkan ID
    public function show($id)
    {
        $tugas = Tugas::find($id);

        if (!$tugas) {
            return response()->json([
                'success' => false,
                'message' => 'Tugas tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Tugas',
            'data' => $tugas,
        ], 200);
    }

    // Mengunduh file tugas berdasarkan ID
    public function download($id)
    {
        $tugas = Tugas::find($id);

        if (!$tugas || !Storage::disk('public')->exists($tugas->file)) {
            return response()->json([
                'success' => false,
                'message' => 'File Tugas tidak ditemukan',
            ], 404);
        }

        $filePath = storage_path('app/public/' . $tugas->file);
        $fileName = basename($tugas->file);

        return response()->download($filePath, $fileName);
    }
}
