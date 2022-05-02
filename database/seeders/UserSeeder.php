<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Riswandi',
            'email' => 'riswandi035@gmail.com',
            'username' => 'mhmd_wandi37',
            'email_verified_at' => date('Y:m:h H:i:s', time()),
            'password' => \bcrypt('admin123'),
            'level' => 'admin',
            'status' => 1
        ]);
    }
}
