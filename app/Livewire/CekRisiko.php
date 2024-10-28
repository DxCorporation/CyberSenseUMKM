<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class CekRisiko extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.cek-risiko');
    }
}
