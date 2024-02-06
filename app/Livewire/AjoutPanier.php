<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Panier;
use App\Models\Shoe;

use Illuminate\Http\Request;


class AjoutPanier extends Component
{


    public $count = 0;
    public $shoe;

    public function mount($shoeId)
    {
        // Récupérer les détails de la chaussure à partir de l'ID
        $this->shoe = Shoe::findOrFail($shoeId);
    }

    public function ajouterAuPanier($shoeId)
    {
        $user_id = auth()->user()->id;

        // Vérifier si un panier existe déjà avec la même combinaison user_id et shoe_id
        $panierExist = Panier::where('user_id', $user_id)->where('shoe_id', $shoeId)->first();

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
