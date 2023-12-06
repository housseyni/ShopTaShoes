<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoeController extends Controller
{
    //

    public function index()
    {
        return Shoe::all();
    }

    public function show(Shoe $shoe)
    {

        return view('shoes.show', compact('shoe'));
    }



    public function store()
    {
        $s = new Shoe();
        $s->nom = request()->Nom;
        $s->marque = request()->Marque;
        $s->taille = request()->Taille;
        $s->couleur = request()->Couleur;
        $s->price = request()->Prix;
        $s->categorie_id = 1;
        $s->user_id = request()->User_id;
        $s->save();

        return response()->json([
            'message' => 'Chaussure crée ! '
        ], 201);
    }
}
