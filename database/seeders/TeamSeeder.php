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
                'image' => 'https://dummyimage.com/150x150/ced4da/6c757d',
            ]
        );
        Team::create(
            [
                'name' => 'Name Wakil',
                'position' => 'Wakil',
                'image' => 'https://dummyimage.com/150x150/ced4da/6c757d',
            ]
        );
    }
}
