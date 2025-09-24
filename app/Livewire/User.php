<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = "Carregando...";
    public $hookName = [];


    public function render()
    {
        return view("livewire.user");
    }

    public function mount(Request $request, $user)
    {
        $this->name = $request->user ?? $user;
        $this->hookName[] = "mount";
    }

    public function updatingName()
    {
        $this->hookName[] = "updatingName";
    }

    public function updatedName()
    {
        $this->hookName[] = "updatedName";
    }

    public function boot()
    {
        $this->hookName[] = "boot";
    }

    public function booted()
    {
        $this->hookName[] = "booted";
    }

    public function hydrate()
    {
        $this->hookName[] = "hydrate";
    }
}
