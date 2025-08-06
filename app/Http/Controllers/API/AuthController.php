<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Siswa;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validasi input
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:siswas',
                'password' => 'required|string|min:8|confirmed',
                'kelas' => 'required|string|max:50',
                'nip' => 'required|string|max:20|unique:siswas',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }

            // Buat data siswa baru
            $siswa = Siswa::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'kelas' => $request->kelas,
                'nip' => $request->nip,
            ]);

            return response()->json([
                'message' => 'Siswa registered successfully!',
                'success' => 'true',
                'siswa' => $siswa,
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // Coba autentikasi menggunakan guard 'siswa'
        if (Auth::guard('siswa')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $siswa = Auth::guard('siswa')->user();

            return response()->json([
                'success' => 'true',
                'message' => 'Login berhasil!',
                'siswa' => $siswa,
            ], 200);
        } else {
            return response()->json(['error' => 'Unauthorized. Email atau password salah.'], 401);
        }
    }

    //Api untuk mendapatkan data profil berdasarkan (id)
    public function getProfile($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        if ($siswa) {
            // Jika image tidak null, buat image_url dengan URL lengkap
            $siswa->image_url = $siswa->image
                ? Storage::url('uploads/profile/' . $siswa->image) // Ini akan menghasilkan URL lengkap
                : null;

            return response()->json([
                'success' => true,
                'message' => 'Profil ditemukan!',
                'siswa' => $siswa,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Profil tidak ditemukan.',
            ], 404);
        }
    }
    public function updateProfile(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jeniskelamin' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Validasi gambar
        ]);

        // Cari siswa berdasarkan ID
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'Profil tidak ditemukan.',
            ], 404);
        }

        // Update data siswa
        $siswa->nama = $validatedData['nama'];
        $siswa->alamat = $validatedData['alamat'];
        $siswa->email = $validatedData['email'];
        $siswa->jeniskelamin = $validatedData['jeniskelamin'];
        $siswa->nip = $validatedData['nip'];
        $siswa->kelas = $validatedData['kelas'];

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($siswa->image) {
                Storage::disk('public')->delete('uploads/profile/' . $siswa->image);
            }

            // Simpan gambar baru
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('uploads/profile', $imageName, 'public');
            $siswa->image = $imageName;
        }

        $siswa->save();

        return response()->json([
            'success' => true,
            'message' => 'Profil berhasil diperbarui!',
            'siswa' => $siswa,
        ], 200);
    }
}
