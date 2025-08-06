<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Menambahkan Auth facade

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); // pastikan file login.blade.php ada
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Proses login
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Redirect ke halaman admin jika login berhasil
            return redirect()->route('dashboard.admin.index'); // Ganti dengan route dashboard admin
        }

        // Jika login gagal
        return redirect()->back()->with('error', 'Invalid login credentials');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
