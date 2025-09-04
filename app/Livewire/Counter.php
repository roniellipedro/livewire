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

    public function increment($quantity)
    {
        if ($quantity < 0 || $quantity > 5) {
            $this->number = 0;
            return;
        }

        if ($this->number < 5) {
            $this->number = $this->number + $quantity;
        }
    }

    public function decrement($quantity)
    {
        if ($quantity < 0 || $quantity > 5) {
            $this->number = 0;
            return;
        }

        if ($this->number > 0) {
            $this->number = $this->number - $quantity;
        }
    }
}
