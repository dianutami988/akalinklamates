<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AbsensiApiController;
use App\Http\Controllers\API\JadwalApiController;
use App\Http\Controllers\API\MateriApiController;
use App\Http\Controllers\API\KalenderApiController;
use App\Http\Controllers\Api\TugasApiController;
use App\Http\Controllers\Api\PengumpulanTugasController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/profile/{id}', [AuthController::class, 'getProfile']);

// Route untuk memperbarui profil berdasarkan ID
Route::post('/profile/update/{id}', [AuthController::class, 'updateProfile']);

//Route untuk post scan barcode absensi
Route::post('/scan-absen', [AbsensiApiController::class, 'store'])->name('api.scan-absen');

Route::get('/jadwal', [JadwalApiController::class, 'index']);       // Mendapatkan semua jadwal
Route::get('/jadwal/{id}', [JadwalApiController::class, 'show']);   // Mendapatkan jadwal berdasarkan ID

// Menampilkan semua materi
Route::get('/materi', [MateriApiController::class, 'index']);

// Mengunduh file materi
Route::get('/materi/download/{id}', [MateriApiController::class, 'download']);

// Menampilkan semua data kalender
Route::get('/kalender', [KalenderApiController::class, 'index']);

// Menampilkan detail data kalender berdasarkan ID
Route::get('/kalender/{id}', [KalenderApiController::class, 'show']);

Route::prefix('tugas')->group(function () {
    Route::get('/', [TugasApiController::class, 'index']); // Semua data tugas
    Route::get('/{id}', [TugasApiController::class, 'show']); // Detail tugas berdasarkan ID
    Route::get('/download/{id}', [TugasApiController::class, 'download']); // Unduh file tugas
});

Route::post('/tugas/kumpul', [PengumpulanTugasController::class, 'store']);