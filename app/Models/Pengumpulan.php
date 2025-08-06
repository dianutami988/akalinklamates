<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumpulan extends Model
{
    use HasFactory;
    protected $table = "pengumpulans";

    protected $fillable = ['id', 'nama', 'kelas', 'judul', 'deskripsi', 'file', 'waktu'];
}
