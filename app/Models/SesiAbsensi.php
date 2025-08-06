<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiAbsensi extends Model
{
    use HasFactory;

    protected $table = 'sesi_absensis';

    protected $fillable = [
        'tipe',
        'status',
        'kelas',
        'tanggal',
        'deskripsi',
        'mata_pelajaran',
        'guru',
    ];
}
