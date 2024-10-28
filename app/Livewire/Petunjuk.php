<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Petunjuk extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.petunjuk');
    }
}
