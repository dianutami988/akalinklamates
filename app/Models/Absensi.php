<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'kelas',
        'waktu_absen',
        'status',
        'id_sesi',
        'guru',
        'mata_pelajaran',
        'barcode_data',
    ];
}