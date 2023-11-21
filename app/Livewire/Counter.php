<?php

namespace App\Livewire;

use App\Models\Shoe;

use Illuminate\Support\Collection;

use Livewire\Component;

class Counter extends Component
{
    public string $nom;
    public string $marque;
    public string $username;
    public int $count;
    public Collection $shoes;



    public function mount()
    {
        $this->username = "Houss";
        $this->count = "0";
        $this->shoes = Shoe::all();
    }


    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    function add()
    {
        $s = new Shoe();
        $s->user_id = 1;
        $s->nom = $this->nom;
        $s->marque = $this->marque;
        $s->taille = 43;
        $s->couleur = "noir";
        $s->price = "200";
        $s->save();
        $this->shoes = Shoe::all()->sortByDesc('id');
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
