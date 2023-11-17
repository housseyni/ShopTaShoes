<?php

namespace Database\Seeders;

use App\Models\Shoe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cpt = 1;
        $s = new Shoe();
        $s->nom = "Gel Cantum";
        $s->marque = "Asics";
        $s->taille = 42;
        $s->couleur = "blanche";
        $s->price = 199.99;
        $s->image_path = '/shoe_' . $cpt++ . '.jpg';
        $s->user_id = 1;
        $s->save();


        $s = new Shoe();
        $s->nom = "Free Run";
        $s->marque = "Nike";
        $s->taille = 45;
        $s->couleur = "Vert";
        $s->price = 99.99;
        $s->image_path = '/shoe_' . $cpt++ . '.jpg';
        $s->user_id = 1;
        $s->save();


        $s = new Shoe();
        $s->nom = "Air force 1";
        $s->marque = "Nike";
        $s->taille = 43;
        $s->couleur = "Noir";
        $s->price = 119.99;
        $s->image_path = '/shoe_' . $cpt++ . '.jpg';
        $s->user_id = 1;
        $s->save();


        $s = new Shoe();
        $s->nom = "B22";
        $s->marque = "Dior";
        $s->taille = 44;
        $s->couleur = "blanche";
        $s->price = 555.99;
        $s->image_path = '/shoe_' . $cpt++ . '.jpg';
        $s->user_id = 2;
        $s->save();


        $s = new Shoe();
        $s->nom = "Tuned";
        $s->marque = "Nike";
        $s->taille = 44;
        $s->couleur = "Rose";
        $s->price = 190.99;
        $s->image_path = '/shoe_' . $cpt++ . '.jpg';
        $s->user_id = 2;
        $s->save();
    }
}
