<?php

namespace Database\Seeders;

use App\Models\Categorie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cpt = 1;
        $c = new Categorie();
        $c->name = "Sport";
        $c->description = "lorem lorem lorem";

        $c->save();
    }
}
