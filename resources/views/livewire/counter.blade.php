<div>
    <h1>Contador: {{ $number }}</h1>
    <button wire:mouseenter="increment($event.target.innerText)">1</button>
    <button wire:click="increment($event.target.innerText)">2</button>
</div>
