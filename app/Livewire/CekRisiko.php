<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Components\Dropdown;

class CekRisiko extends Component
{
    public $provinces = [];
    public $selectedProvince;

    public function mount()
    {
        // Fetch provinces when the component mounts
        $this->provinces = (new Dropdown())->provinces();
    }
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.cek-risiko');
    }
}
