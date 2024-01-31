<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shoe;
use App\Models\Taille;

class ShoeTailleeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérez les chaussures et les tailles
        $shoes = Shoe::all();
        $tailles = Taille::all();

        // Associez chaque chaussure à toutes les tailles
        foreach ($shoes as $shoe) {
            $randomTailles = $tailles->random(rand(1, count($tailles))); // Choisissez aléatoirement quelques tailles pour chaque chaussure
            $shoe->tailles()->attach($randomTailles);
        }
    }
}
