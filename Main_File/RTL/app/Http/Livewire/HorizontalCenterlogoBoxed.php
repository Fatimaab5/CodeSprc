<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HorizontalCenterlogoBoxed extends Component
{
    public function render()
    {
        return view('livewire.horizontal-centerlogo-boxed')
        ->layout('layouts.Versions.horizontal-centerlogo-boxed');
    }
}
