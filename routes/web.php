<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\AdminGuruController;
use App\Http\Controllers\AdminJadwalController;
use App\Http\Controllers\AdminSiswaController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\LaporanGuruController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SesiAbsensiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\PengumpulanController;
use App\Http\Controllers\AbsensiManualController;

// Route untuk halaman onboarding
Route::get('/', function () {
    return view('onboarding');
});

// Route untuk halaman login Admin
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rute untuk admin (dilindungi dengan middleware auth)
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Dashboard admin
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin.index');

    // Menu Data Guru dan Jadwal Mengajar
    // Menu Data Guru
    Route::get('guru', [AdminGuruController::class, 'index'])->name('dashboard.admin.guru.dataguru');
    Route::get('guru/tambah', [AdminGuruController::class, 'create'])->name('dashboard.admin.guru.tambahguru');
    Route::post('guru/store', [AdminGuruController::class, 'store'])->name('dashboard.admin.guru.store');
    Route::get('guru/edit/{id}', [AdminGuruController::class, 'edit'])->name('dashboard.admin.guru.editguru');
    Route::post('guru/update', [AdminGuruController::class, 'update'])->name('dashboard.admin.guru.update');
    Route::get('guru/hapus/{id}', [AdminGuruController::class, 'delete'])->name('dashboard.admin.guru.delete');
    Route::get('guru/search', [AdminGuruController::class, 'search'])->name('dashboard.admin.guru.search');

    // Menu Jadwal Mengajar
    Route::get('guru/jadwal', [AdminJadwalController::class, 'index'])->name('dashboard.admin.guru.jadwalguru');
    Route::get('guru/jadwal/tambah', [AdminJadwalController::class, 'create'])->name('dashboard.admin.guru.tambahjadwal');
    Route::post('guru/jadwal/store', [AdminJadwalController::class, 'store'])->name('dashboard.admin.guru.jadwal.store');
    Route::get('guru/jadwal/editjd/{id}', [AdminJadwalController::class, 'edit'])->name('dashboard.admin.guru.editjadwal');
    Route::post('guru/jadwal/update', [AdminJadwalController::class, 'update'])->name('dashboard.admin.guru.jadwal.update');
    Route::get('guru/jadwal/hapusjd/{id}', [AdminJadwalController::class, 'delete'])->name('dashboard.admin.guru.jadwal.delete');
    Route::get('guru/jadwal/search', [AdminJadwalController::class, 'search'])->name('dashboard.admin.guru.jadwal.search');

    // Menu Siswa
    Route::get('siswa', [AdminSiswaController::class, 'index'])->name('dashboard.admin.siswa.siswa');
    Route::get('siswa/tambah', [AdminSiswaController::class, 'create'])->name('dashboard.admin.siswa.tambahsiswa');
    Route::post('siswa/store', [AdminSiswaController::class, 'store'])->name('dashboard.admin.siswa.store');
    Route::get('siswa/editds/{id}', [AdminSiswaController::class, 'edit'])->name('dashboard.admin.siswa.editsiswa');
    Route::post('siswa/update', [AdminSiswaController::class, 'update'])->name('dashboard.admin.siswa.update');
    Route::get('siswa/hapusds/{id}', [AdminSiswaController::class, 'delete'])->name('dashboard.admin.siswa.delete');
    Route::get('siswa/search', [AdminSiswaController::class, 'search'])->name('dashboard.admin.siswa.search');

    // Rute untuk admin laporan
    Route::get('laporan', [AdminLaporanController::class, 'index'])->name('admin.laporan.index');

    // Menu Kalender Akademik
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('kalender', controller: KalenderController::class);
    });
});

// Route Untuk Halaman Registrasi dan Login Guru
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
Route::get('/loginguru', [AuthController::class, 'tampilLogin'])->name('loginguru');
Route::post('/loginguru/submit', [AuthController::class, 'submitLogin'])->name('loginguru.submit');

// Dashboard Guru
Route::get('guru', [TugasController::class, 'index'])->name('dashboard.guru.dashboardguru');

// Menu Absensi
Route::get('absensi', [AbsensiController::class, 'index'])->name('dashboard.guru.absensi');
Route::get('absensi/search', [AbsensiController::class, 'search'])->name('dashboard.guru.absensi.search');
Route::post('/guru/absensibarcode', [AbsensiController::class, 'storeBarcode'])->name('guru.storeBarcode');
Route::get('/guru/absensi', [AbsensiController::class, 'index'])->name('guru.absensi');
// Route untuk halaman rekap absensi per siswa
Route::get('/guru/absensi/rekap-siswa', [AbsensiController::class, 'rekapSiswa'])->name('guru.absensi.rekap-siswa');

// Menu Tugas
Route::get('guru/tugas', [TugasController::class, 'create'])->name('dashboard.guru.tugasguru');
Route::post('guru/tugas/store', [TugasController::class, 'store'])->name('guru.tugas.store');

// Menu Pengumpulan Tugas
Route::get('guru/pengumpulan', [PengumpulanController::class, 'index'])->name('dashboard.guru.pengumpulan');
Route::delete('guru/pengumpulan-tugas/{id}', [PengumpulanController::class, 'destroy'])->name('pengumpulan.destroy');

// Menu Laporan
// Route untuk menampilkan halaman laporan guru
Route::get('laporan', [LaporanGuruController::class, 'index'])->name('dashboard.laporanguru');
// Route untuk menampilkan form tambah laporan
Route::get('laporan/tambah', [LaporanGuruController::class, 'create'])->name('dashboard.laporan.create');
// Route untuk menyimpan data laporan
Route::post('laporan/store', [LaporanGuruController::class, 'store'])->name('dashboard.laporan.store');
// Route untuk menghapus data laporan
Route::delete('laporan/delete/{id}', [LaporanGuruController::class, 'destroy'])->name('dashboard.laporan.delete');

// Menu Profil
Route::get('profil', [ProfilController::class, 'index'])->name('dashboard.guru.profil');

// Route untuk menampilkan form dan memproses penyimpanan sesi absensi
Route::match(['get', 'post'], 'guru/absensibarcode', [SesiAbsensiController::class, 'createAndStore'])->name('guru.absensibarcode');

// Route untuk menu uoload materi oleh guru
Route::get('materi/create', [MateriController::class, 'create'])->name('materi.create');
Route::post('materi', [MateriController::class, 'store'])->name('guru.materi.store');
Route::get('materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('meteri', [MateriController::class, 'create'])->name('dashboard.guru.materiGuru');

Route::prefix('guru')->group(function () {
    Route::get('/absensi/manual', [AbsensiManualController::class, 'index'])->name('guru.absensi.manual');
    Route::post('/absensi/manual', [AbsensiManualController::class, 'store'])->name('guru.absensi.manual.store');
});