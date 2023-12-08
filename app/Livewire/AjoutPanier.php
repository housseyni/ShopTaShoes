<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Panier;
use App\Models\Shoe;


class AjoutPanier extends Component
{
    public $shoes;
    public $tri;  // Tri par défaut par le nom
    public $ordre = 'asc';  // Ordre par défaut ascendant
    public $filtre = '';






    public function mount()
    {
        // $this->tri = 'nom';
        $this->shoes = Shoe::all();
        // $this->shoes = $this->getShoes();
    }




    public function trierParPrix()
    {

        $this->tri = 'price';
    }

    public function trierParNom()
    {

        $this->tri = 'nom';
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
    }
    public function render()
    {
        if ($this->tri == 'price') {
            $shoes = Shoe::orderBy('price', 'asc')->get();
            $this->shoes = $shoes;
        }


        if ($this->tri == 'nom') {
            $shoes = Shoe::orderBy('nom', 'asc')->get();
            $this->shoes = $shoes;
        }


        return view('livewire.ajout-panier');
    }
}
