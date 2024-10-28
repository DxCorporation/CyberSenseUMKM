<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.profile');
    }
}
