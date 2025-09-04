<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        if ($this->number < 5) {
            $this->number = $this->number + 1;
        }
    }

    public function decrement()
    {
        if ($this->number > 0) {
            $this->number = $this->number - 1;
        }
    }
}
