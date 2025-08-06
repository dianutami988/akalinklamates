<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    // Menampilkan daftar kalender
    public function index()
    {
        $kalenders = Kalender::all();
        return view('Dashboard.Admin.kalender.index', compact('kalenders'));
    }

    // Menampilkan form tambah kalender
    public function create()
    {
        return view('Dashboard.Admin.kalender.create');
    }

    // Menyimpan kalender baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        // Simpan data ke dalam tabel kalender
        Kalender::create($validated);

        // Redirect dengan notifikasi sukses
        return redirect()->route('admin.kalender.index')->with('success', 'Hari Besar berhasil ditambahkan!');
    }

    // Menampilkan form edit kalender
    public function edit(Kalender $kalender)
    {
        return view('Dashboard.Admin.kalender.edit', compact('kalender'));
    }

    // Memperbarui data kalender
    public function update(Request $request, Kalender $kalender)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        // Perbarui data kalender
        $kalender->update($validated);

        // Redirect dengan notifikasi sukses
        return redirect()->route('admin.kalender.index')->with('success', 'Hari Besar berhasil diperbarui.');
    }

    // Menghapus kalender
    public function destroy(Kalender $kalender)
    {
        $kalender->delete();
        return redirect()->route('admin.kalender.index')->with('success', 'Hari Besar berhasil dihapus.');
    }
}
