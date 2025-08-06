<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapels = [
            ['nama' => 'Matematika', 'kode_mapel' => 'MTK', 'deskripsi' => 'Pelajaran Matematika'],
            ['nama' => 'Bahasa Indonesia', 'kode_mapel' => 'BIND', 'deskripsi' => 'Pelajaran Bahasa Indonesia'],
            ['nama' => 'Bahasa Inggris', 'kode_mapel' => 'BING', 'deskripsi' => 'Pelajaran Bahasa Inggris'],
            ['nama' => 'Fisika', 'kode_mapel' => 'FIS', 'deskripsi' => 'Pelajaran Fisika'],
            ['nama' => 'Kimia', 'kode_mapel' => 'KIM', 'deskripsi' => 'Pelajaran Kimia'],
        ];

        foreach ($mapels as $mapel) {
            Mapel::create($mapel);
        }
    }
}
