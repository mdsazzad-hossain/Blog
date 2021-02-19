<?php

namespace App\Http\Livewire\Frontend\Layouts;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.frontend.layouts.home')
        ->extends('livewire.frontend.layouts.app');
    }
}
