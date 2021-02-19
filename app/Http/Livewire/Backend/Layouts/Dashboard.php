<?php

namespace App\Http\Livewire\Backend\Layouts;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.layouts.dashboard')
        ->extends('livewire.backend.layouts.app');
    }
}
