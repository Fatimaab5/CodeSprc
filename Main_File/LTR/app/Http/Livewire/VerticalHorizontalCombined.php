<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VerticalHorizontalCombined extends Component
{
    public function render()
    {
        return view('livewire.vertical-horizontal-combined')
        ->layout('layouts.Versions.vertical-horizontal-combined');
    }
}
