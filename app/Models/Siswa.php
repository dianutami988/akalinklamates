<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "siswas";

    protected $fillable = [
        'id',
        'nama',
        'nip', // Pastikan ini sesuai dengan kolom di database
        'alamat',
        'jeniskelamin', // Sesuaikan dengan nama kolom di database
        'email',
        'password',
        'kelas',
        'image'
    ];

    // Sembunyikan password dalam respons JSON
    protected $hidden = ['password'];
}