<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Province;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Http;

class CekRisiko extends Component
{
    public $provinsi = [];
    public $kabupaten = [];
    public $selectedProvinsi = null;
    public $selectedKabupaten = null;

    public function mount()
    {
        $this->provinsi = $this->getProvinsi();
    }

    public function updatedSelectedProvinsi($provinsiId)
    {
        if ($provinsiId) {
            $this->kabupaten = $this->getKabupaten($provinsiId);
        } else {
            $this->kabupaten = [];
        }
    }

    public function getProvinsi()
    {
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        return $response->json();
    }

    public function getKabupaten($provinsiId)
    {
        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{$provinsiId}.json");
        return $response->json();
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.cek-risiko', [
            'provinsi' => $this->provinsi,
            'kabupaten' => $this->kabupaten,
        ]);
    }
}
