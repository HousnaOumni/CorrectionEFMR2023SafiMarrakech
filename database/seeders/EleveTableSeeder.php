<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Eleve;

class EleveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ################# Méthode 1 ##############
   /*      $eleves = [
            ['nom' => 'ALAMI', 'prenom' => 'Ahmed','club_id' => 3],
            ['nom' => 'DALI', 'prenom' => 'Ghita','club_id' =>1],
            ['nom' => 'BENNANI', 'prenom' => 'Houssam','club_id' => 2],
        ];
        DB::table('eleves')->insert($eleves); */

        ##############   Méthode 2 : model $fillable ###################
        Eleve::create(['nom' => 'ALAMI', 'prenom' => 'Ahmed','club_id' => 3]);
        Eleve::create(['nom' => 'DALI', 'prenom' => 'Ghita','club_id' =>1]);
        Eleve::create(['nom' => 'BENNANI', 'prenom' => 'Houssam','club_id' => 2]);

        ##############   Méthode 3 ####################
        /*$eleve1 = new Eleve();
        $eleve1->nom = 'ALAMI';
        $eleve1->prenom = 'Ahmed';
        $eleve1->club_id = 3;
        $eleve1->save();

        $eleve2 = new Eleve();
        $eleve2->nom = 'Dali';
        $eleve2->prenom = 'Ghita';
         $eleve2->club_id = 1;
        $eleve2->save();

        $eleve3 = new Eleve();
        $eleve3->nom = 'BENNANI';
        $eleve3->prenom = 'Houssam';
        $eleve3->club_id = 2;
        $eleve3->save();*/
    }
}
