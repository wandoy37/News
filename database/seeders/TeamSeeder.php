<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create(
            [
                'name' => 'Name Ketua',
                'position' => 'Ketua',
                'image' => 'avatar/profile.jpg',
            ]
        );
        Team::create(
            [
                'name' => 'Name Wakil',
                'position' => 'Wakil',
                'image' => 'avatar/profile.jpg',
            ]
        );
    }
}
