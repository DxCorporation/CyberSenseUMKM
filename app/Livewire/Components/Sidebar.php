<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public $theme;

    public function mount()
    {
        // Set theme to the value in session, or default to 'cupcake' if not set
        if (session()->has('theme')) {
            $this->theme = session('theme');
        } else {
            $this->theme = 'cupcake';
            session(['theme' => $this->theme]);
        }
    }


    public function updatedTheme($value)
    {
        // Update session with the selected theme
        session(['theme' => $value]);
    }
    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
