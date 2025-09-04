<div>
    <h1>Contador: {{ $number }}</h1>
    {{--
    <input wire:keydown.a.prevent="increment" wire:keydown.d.prevent="decrement">

    <button wire:mouseover="increment">1</button>
    <button wire:mouseout="decrement">-1</button> --}}

    {{-- <button wire:click="$toggle('number')">Toggle</button> --}}

    <button wire:click="$refresh">Refresh</button>
</div>
