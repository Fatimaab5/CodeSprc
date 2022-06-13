<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HorizontalCenterlogo extends Component
{
    public function render()
    {
        return view('livewire.horizontal-centerlogo')
        ->layout('layouts.Versions.horizontal-centerlogo');
    }
}
