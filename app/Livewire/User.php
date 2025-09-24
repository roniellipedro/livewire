<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = "Carregando...";

    public function render()
    {
        return view('livewire.user');
    }

    public function mount(Request $request, $user)
    {
        $this->name = $request->user ?? $user;
    }
}
