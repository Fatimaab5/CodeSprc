<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VerticalmenuClosedSidebarBoxed extends Component
{
    public function render()
    {
        return view('livewire.verticalmenu-closed-sidebar-boxed')
        ->layout('layouts.Versions.verticalmenu-closed-sidebar-boxed');
    }
}
