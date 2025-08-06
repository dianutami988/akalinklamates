<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumpulanTugas extends Model
{
    use HasFactory;

    protected $table = 'pengumpulan_tugas';

    protected $fillable = [
        'nama_siswa',
        'kelas',
        'judul',
        'mapel',
        'file',
        'waktu_pengumpulan'
    ];
}
