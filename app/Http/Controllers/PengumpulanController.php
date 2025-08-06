<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengumpulanTugas;
use Illuminate\Support\Facades\Storage;

class PengumpulanController extends Controller
{
    /**
     * Menampilkan daftar pengumpulan tugas.
     */
    public function index(Request $request)
    {
        // Mengambil semua data dari tabel pengumpulan_tugas
        $pengumpulan = PengumpulanTugas::all();

        return view('Dashboard.Guru.pengumpulantugas', ['pengumpulan' => $pengumpulan]);
    }

    /**
     * Menghapus data pengumpulan tugas berdasarkan ID.
     */
    public function destroy($id)
    {
        try {
            $tugas = PengumpulanTugas::findOrFail($id);

            // Hapus file dari folder penyimpanan spesifik
            if ($tugas->file) {
                $filePath = 'public/uploads/tugas/pengumpulan_tugas/' . $tugas->file;

                // Pastikan file ada sebelum dihapus
                if (Storage::exists($filePath)) {
                    Storage::delete($filePath);
                }
            }

            // Hapus data dari database
            $tugas->delete();

            return redirect()->back()->with('success', 'Tugas berhasil dihapus beserta file terkait.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus tugas: ' . $e->getMessage());
        }
    }
}
