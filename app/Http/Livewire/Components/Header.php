<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.components.header');
    }
}
