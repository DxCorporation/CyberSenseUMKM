<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class FormPengisian extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.form-pengisian');
    }
}
