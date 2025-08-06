<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika nama tabel tidak sama dengan nama model dalam bentuk jamak)
    protected $table = 'mapels';

    // Kolom-kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'kode_mapel',
        'deskripsi',
    ];

    /**
     * Relasi ke tabel absensi
     * Satu mapel dapat memiliki banyak data absensi
     */
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

    /**
     * Relasi opsional ke guru jika mata pelajaran memiliki pengajar utama.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
