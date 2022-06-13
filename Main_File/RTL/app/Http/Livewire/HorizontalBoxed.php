<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HorizontalBoxed extends Component
{
    public function render()
    {
        return view('livewire.horizontal-boxed')
        ->layout('layouts.Versions.horizontal-boxed');
    }
}
