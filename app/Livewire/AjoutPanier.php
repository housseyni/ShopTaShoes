<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Panier;
use App\Models\Shoe;


class AjoutPanier extends Component
{


    public $count = 0;
    public $shoe;
    public $tailleId = 2;

    public function mount($shoeId)
    {
        // Récupérer les détails de la chaussure à partir de l'ID
        $this->shoe = Shoe::findOrFail($shoeId);
    }

    public function ajouterAuPanier()
    {

        // Vérifier si l'utilisateur est authentifié
        if (!auth()->check()) {
            // Rediriger l'utilisateur vers la page de connexion ou afficher un message d'erreur
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour ajouter des articles au panier.');
        }

        // Obtenez l'ID de l'utilisateur s'il est authentifié
        $user_id = auth()->user()->id;

        // Vérifier si un panier existe déjà avec la même combinaison user_id, shoe_id et taille_id
        $panierExist = Panier::where('user_id', $user_id)
            ->where('shoe_id', $this->shoe->id)
            ->where('taille_id', $this->tailleId)
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
                'shoe_id' => $this->shoe->id,
                'taille_id' => $this->tailleId, // Inclure l'ID de la taille sélectionnée
                'quantity' => 1,
            ]);

            $panier->save();
        }

        $this->count++;
    }

    public function render()
    {
        return view('livewire.ajout-panier');
    }
}
