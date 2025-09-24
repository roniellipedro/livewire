<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = "Carregando...";
    public $hookName = "N/A";
    public $propertyName = "N/A";
    public $propertyValue = "N/A";

    public function render()
    {
        return view("livewire.user");
    }

    public function mount(Request $request, $user)
    {
        $this->name = $request->user ?? $user;
    }

    public function updated($property, $value)
    {
        $value = strtoupper($value);

        $this->name = $value;
        $this->hookName = "Updated";
        $this->propertyName = $property;
        $this->propertyValue = $value;
    }
}
