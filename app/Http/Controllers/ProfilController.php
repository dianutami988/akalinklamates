<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Guru;

class ProfilController extends Controller
{
    // Menampilkan data profil guru yang sedang login
    public function index(Request $request)
    {
        // Mendapatkan data guru yang sedang login
        $gurus = Auth::Guru(); // Mengambil data guru yang sedang login
        return view('Dashboard.Guru.profil', compact('gurus')); // Mengirim data ke view
    }

    // Update data profil guru
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'jeniskelamin' => 'required|string|in:L,P',
        ]);

        // Update data guru berdasarkan id pengguna yang sedang login
        $guru = Auth::Guru();
        $guru->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jeniskelamin,
        ]);

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('guru.profil')->with('success', 'Profil berhasil diperbarui');
    }
}
