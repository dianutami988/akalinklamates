<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class MateriApiController extends Controller
{
    // Menampilkan semua data materi
    public function index()
    {
        $materi = Materi::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Materi',
            'data' => $materi,
        ], 200);
    }

    // Mengunduh file materi berdasarkan ID
    public function download($id)
    {
        $materi = Materi::find($id);

        if (!$materi || !Storage::disk('public')->exists($materi->file_materi)) {
            return response()->json([
                'success' => false,
                'message' => 'File Materi tidak ditemukan',
            ], 404);
        }

        $filePath = storage_path('app/public/' . $materi->file_materi);
        $fileName = basename($materi->file_materi);

        return response()->download($filePath, $fileName);
    }
}
