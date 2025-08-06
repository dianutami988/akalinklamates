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
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');             // Kolom nama siswa
            $table->string('nisn');             // Kolom NISN siswa
            $table->string('kelas');            // Kolom kelas siswa
            $table->string('email')->unique(); // Kolom email, pastikan unik
            $table->string('jenis_kelamin');   // Kolom jenis kelamin siswa
            $table->string('alamat');          // Kolom alamat siswa
            $table->timestamps();              // Kolom timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
