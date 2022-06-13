<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VerticalToggle extends Component
{
    public function render()
    {
        return view('livewire.vertical-toggle')
        ->layout('layouts.Versions.vertical-toggle');
    }
}
