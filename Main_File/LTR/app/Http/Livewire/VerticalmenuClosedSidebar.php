<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VerticalmenuClosedSidebar extends Component
{
    public function render()
    {
        return view('livewire.verticalmenu-closed-sidebar')
        ->layout('layouts.Versions.verticalmenu-closed-sidebar');
    }
}
