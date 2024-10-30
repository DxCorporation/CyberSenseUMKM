<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class FormPengisian extends Component
{
    public $profile = false;
    public $infrastruktur = false;
    public $jenisData = false;
    public $keamanan = false;
    public $kebijakan = false;
    public $riwayat = false;
    public $sumberDaya = false;

    public function mount()
    {
        $this->profile = true;
    }

    public function next()
    {
        if ($this->profile == true) {
            $this->profile = false;
            $this->infrastruktur = true;
        } elseif ($this->infrastruktur == true) {
            $this->infrastruktur = false;
            $this->jenisData = true;
        } elseif ($this->jenisData == true) {
            $this->jenisData = false;
            $this->keamanan = true;
        } elseif ($this->keamanan == true) {
            $this->keamanan = false;
            $this->kebijakan = true;
        } elseif ($this->kebijakan == true) {
            $this->kebijakan = false;
            $this->riwayat = true;
        } elseif ($this->riwayat == true) {
            $this->riwayat = false;
            $this->sumberDaya = true;
        }
    }

    public function back()
    {
        if ($this->infrastruktur) {
            $this->infrastruktur = false;
            $this->profile = true;
        } elseif ($this->jenisData) {
            $this->jenisData = false;
            $this->infrastruktur = true;
        } elseif ($this->keamanan) {
            $this->keamanan = false;
            $this->jenisData = true;
        } elseif ($this->kebijakan) {
            $this->kebijakan = false;
            $this->keamanan = true;
        } elseif ($this->riwayat) {
            $this->riwayat = false;
            $this->kebijakan = true;
        } elseif ($this->sumberDaya) {
            $this->sumberDaya = false;
            $this->riwayat = true;
        }
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.form-pengisian');
    }
}
