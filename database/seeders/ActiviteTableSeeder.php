<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activite;
use Carbon\Carbon;

class ActiviteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activite::create([
            'description' => 'Formation en cybersécurité',
            'nombreJours' => 5,
            'dateDebut' => Carbon::create(2025, 6, 1),
        ]);

        Activite::create([
            'description' => 'Atelier de développement web',
            'nombreJours' => 3,
            'dateDebut' => Carbon::create(2025, 6, 10),
        ]);

        Activite::create([
            'description' => 'Séminaire sur l’intelligence artificielle',
            'nombreJours' => 2,
            'dateDebut' => Carbon::create(2025, 6, 20),
        ]);
    }
}
