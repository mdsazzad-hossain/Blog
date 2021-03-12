<?php

namespace App\Http\Livewire;
use App\Models\Demo;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Home extends Component
{
    public $data,$demos;
    public function render()
    {
        $this->data = auth()->user();
        $this->demos = Demo::with('get_category')->get();
        return view('livewire.home')->extends('frontend.app')
        ->section('content');
    }
}
