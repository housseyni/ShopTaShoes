<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public string $username;

    public function render()
    {
        return view('livewire.counter');
    }
}
