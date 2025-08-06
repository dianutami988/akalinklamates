<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $fillable = [
        'judul_materi', 
        'nama_guru', 
        'mata_pelajaran', 
        'waktu_dibagikan', 
        'kelas', 
        'file_materi',
    ];
}
