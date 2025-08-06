<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        DB::table('jadwals')->insert([
            [
                'nama_guru' => 'Suci Budiarti',
                'kategori_kelas' => 'IPA',
                'mata_pelajaran' => 'Matematika',
                'hari' => 'Senin',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '10:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_guru' => 'Ahmad Syarif',
                'kategori_kelas' => 'IPS',
                'mata_pelajaran' => 'Geografi',
                'hari' => 'Selasa',
                'jam_mulai' => '10:00:00',
                'jam_selesai' => '11:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data lainnya di sini
        ]);
    }
}
