<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::all();
        return view('shoes.index', compact('shoes'));
    }
    public function show(Shoe $shoe)
    {

        return view('shoes.show', compact('shoe'));
    }
    public function create()
    {
        return view('shoes.create');
    }
    public function update(Shoe $shoe)
    {

        request()->validate([
            'price' => 'required|decimal:2',
            'nom' => 'required|min:5|max:25',
            'couleur' => 'required',
            'taille' => 'required|integer',
        ]);

        $shoe->nom = request()->nom;
        $shoe->marque = request()->marque;
        $shoe->taille = request()->taille;
        $shoe->couleur = request()->couleur;
        $shoe->price = request()->price;
        $shoe->save();
        return redirect('/shoes/' . $shoe->id);
    }

    public function edit(Shoe $shoe)
    {
        return view('shoes.edit', compact('shoe'));
    }
    public function destroy(Shoe $shoe)
    {

        $shoe->delete();
        return redirect('/shoes');
    }

    public function store()
    {

        $s = new Shoe();
        $s->nom = request()->Nom;
        $s->marque = request()->Marque;
        $s->taille = request()->Taille;
        $s->couleur = request()->Couleur;
        $s->price = request()->Prix;
        $s->save();

        return redirect('/shoes/' . $s->id);
    }
}
