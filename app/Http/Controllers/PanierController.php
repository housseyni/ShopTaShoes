<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;
use App\Models\Panier;
use Livewire\Component;



class PanierController extends Controller
{


    //     public function afficherPanier()
    //     {
    //         // Supposons que vous avez une variable $chaussures avec les données et $total pour le total
    //         $shoes = Shoe::all();
    //         $total = $shoes->sum('price');
    //         return view('panier', compact('shoes', 'total'));
    //     }



    //     public function afficherPanier()
    //     {
    //         $shoesDansPanier = session('panier', []); // Obtenez les chaussures ajoutées à partir de la session
    //         $shoes = Shoe::whereIn('id', $shoesDansPanier)->get(); // Chargez les détails des chaussures depuis la base de données

    //         $total = $shoes->sum('price');

    //         return view('panier', compact('shoes', 'total'));
    //     }


    //     public function ajouterAuPanier($shoeId)
    //     {
    //         $shoesDansPanier = session('panier', []);
    //         $shoesDansPanier[] = $shoeId;
    //         session(['panier' => $shoesDansPanier]);

    //         return redirect()->route('panier.index')->with('success', 'Chaussure ajoutée au panier avec succès.');
    //     }



    //     public function supprimerDuPanier($shoeId)
    //     {
    //         // Récupérer les chaussures actuelles dans le panier depuis la session
    //         $shoesDansPanier = session('panier', []);

    //         // Vérifier si la chaussure à supprimer est présente dans le panier
    //         if (in_array($shoeId, $shoesDansPanier)) {
    //             // Supprimer la chaussure du panier
    //             $shoesDansPanier = array_diff($shoesDansPanier, [$shoeId]);

    //             // Mettre à jour la session avec le panier modifié
    //             session(['panier' => $shoesDansPanier]);
    //         }

    //         return redirect()->route('panier.index')->with('success', 'Chaussure supprimée du panier avec succès.');
    //     }





    // public function afficherPanier()
    // {
    //     $paniers = Panier::with('shoe')->find($panierId);
    //     Vérifier si le panier existe
    //     if (!$paniers) {
    //         return redirect()->route('panier.index')->with('error', 'Panier introuvable.');
    //     }

    //     Afficher les détails du panier dans la vue
    //     return view('panier', compact('paniers'));




    //     $paniers = Panier::where('user_id', auth()->user()->id)->get();

    //     Vérifiez si au moins un panier existe avant de passer à la vue
    //     if ($paniers->isEmpty()) {
    //         return redirect()->route('panier.index')->with('error', 'Panier introuvable.');
    //     }

    //     Vérifiez si chaque panier a une chaussure associée   
    //     foreach ($paniers as $panier) {
    //         if (!$panier->shoe) {
    //             $panier->delete();
    //         }
    //     }


    //     $total = $paniers->sum(function ($panier) {
    //         return $panier->quantity * $panier->shoe->price;
    //     });

    //     return view('panier', compact('paniers', 'total'));
    // }



    public function afficherPanier()
    {
        // Charger tous les articles du panier
        $paniers = Panier::where('user_id', auth()->user()->id)->get();

        // Vérifier si au moins un article existe
        if ($paniers->isEmpty()) {
            return redirect()->route('panier.index')->with('error', 'Panier vide.');
        }

        // Vérifiez si chaque article a une chaussure associée
        foreach ($paniers as $panier) {
            if (!$panier->shoe) {
                $panier->delete();
            }
        }

        // Calculer le total
        $total = 0;

        foreach ($paniers as $panier) {
            $total += $panier->quantity * $panier->shoe->price;
        }

        // Afficher les détails du panier dans la vue
        return view('panier', compact('paniers', 'total'));
    }


    public function ajouterAuPanier($shoeId, $tailleId)
    {
        dd($shoeId, $tailleId);
        $user_id = auth()->user()->id;

        // Vérifier si un panier existe déjà avec la même combinaison user_id, shoe_id et taille_id
        $panierExist = Panier::where('user_id', $user_id)
            ->where('shoe_id', $shoeId)
            ->where('taille_id', $tailleId)
            ->first();

        if ($panierExist) {
            // Mettre à jour la quantité dans le panier existant
            $panierExist->update([
                'quantity' => $panierExist->quantity + 1,
            ]);
        } else {
            // Créer un nouveau panier si aucun n'existe avec la même combinaison
            $panier = new Panier([
                'user_id' => $user_id,
                'shoe_id' => $shoeId,
                'taille_id' => $tailleId, // Inclure l'ID de la taille sélectionnée
                'quantity' => 1,
            ]);

            $panier->save();
        }

        return redirect(route('panier.index'))->with('success', 'Chaussure ajoutée au panier avec succès.');
    }


    public function supprimerDuPanier($id)
    {



        if ($id === "-1") {
            $panier = Panier::where('user_id', auth()->user()->id)->get();
            $panier->each->delete();
            return redirect()->route('panier.index')->with('success', 'Panier vidé avec succès.');
        }

        $panier = Panier::find($id);

        if (!$panier) {

            return redirect()->route('panier.index')->with('error', 'Élément du panier introuvable.');
        }


        if ($panier->quantity > 1) {
            $panier->update(['quantity' => $panier->quantity - 1]);
        } else {

            $panier->delete();
        }

        return redirect()->route('panier.index')->with('success', 'Chaussure supprimée du panier avec succès.');
    }
}
