<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'admin', // Ganti dengan username admin yang Anda inginkan
            'password' => bcrypt('password123'), // Ganti dengan password admin yang Anda inginkan
        ]);
    }
}
