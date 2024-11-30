<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Representasi;
use Livewire\Attributes\Layout;

class Home extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.home', [
            'representasis' => Representasi::latest()->get(),
        ]);
    }
}
