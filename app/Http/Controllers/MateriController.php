<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        return view('Dashboard.Guru.materiGuru');
    }

    public function create()
    {
        return view('Dashboard.Guru.materiGuru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_materi' => 'required|string|max:255',
            'nama_guru' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
            'waktu_dibagikan' => 'required|date',
            'kelas' => 'required|string|max:10',
            'file_materi' => 'required|file|mimes:pdf,docx,pptx|max:10240', // Validasi file
        ]);

        // Menyimpan file materi ke folder public/storage/uploads/materi/
        $filePath = $request->file('file_materi')->store('uploads/materi', 'public');

        // Menyimpan data ke database
        Materi::create([
            'judul_materi' => $request->judul_materi,
            'nama_guru' => $request->nama_guru,
            'mata_pelajaran' => $request->mata_pelajaran,
            'waktu_dibagikan' => $request->waktu_dibagikan,
            'kelas' => $request->kelas,
            'file_materi' => $filePath,
        ]);

        return redirect()->route('dashboard.guru.materiGuru')->with('add', true);
    }
}
