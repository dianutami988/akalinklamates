<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('tugas', function (Blueprint $table) {
        $table->string('judul')->default('Judul Default')->change(); // Tambahkan default value
    });
}

public function down()
{
    Schema::table('tugas', function (Blueprint $table) {
        $table->string('judul')->default(null)->change(); // Kembalikan ke kondisi sebelumnya
    });
}

    };

