<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengumpulan_tugas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_siswa'); // Nama siswa
            $table->string('kelas'); // Kelas siswa
            $table->string('judul'); // Judul tugas
            $table->string('mapel'); // Mata pelajaran
            $table->string('file'); // Nama file yang diunggah
            $table->timestamp('waktu_pengumpulan')->useCurrent(); // Waktu pengumpulan (default: current timestamp)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas');
    }
};
