<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = ['Club Informatique', 'Club Sportif', 'Club Théâtre', 'Club Musique', 'Club Robotique'];
        foreach ($clubs as $club) {
            Club::create(['nom' => $club]);
        }

    }
}
