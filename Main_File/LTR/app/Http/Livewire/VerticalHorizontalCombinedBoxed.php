<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VerticalHorizontalCombinedBoxed extends Component
{
    public function render()
    {
        return view('livewire.vertical-horizontal-combined-boxed')
        ->layout('layouts.Versions.vertical-horizontal-combined-boxed');
    }
}
