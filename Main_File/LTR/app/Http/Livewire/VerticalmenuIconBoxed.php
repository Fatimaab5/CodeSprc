<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VerticalmenuIconBoxed extends Component
{
    public function render()
    {
        return view('livewire.verticalmenu-icon-boxed')
        ->layout('layouts.Versions.verticalmenu-icon-boxed');
    }
}
