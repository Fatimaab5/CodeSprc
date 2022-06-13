<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Construction extends Component
{
    public function render()
    {
        return view('livewire.construction')
        ->layout('layouts.customapp');
    }
}
