<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Alessandro";
    public $salutation = "Hello";
    public $salutationOptions = ["Hello", "Bye Bye"];
    public $color = 'white';

    public function render()
    {
        return view('livewire.hello-world');
    }
}
