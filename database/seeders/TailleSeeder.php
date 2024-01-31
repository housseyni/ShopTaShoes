<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Taille;

class TailleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tailles = ['39', '40', '41', '42', '43', '44'];

        foreach ($tailles as $taille) {
            Taille::create([
                'taille' => $taille,
            ]);
        }
    }
}
