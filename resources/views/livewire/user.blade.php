<div>
    <input wire:model.live="name" />
    <h1>Name: {{ $name }}</h1>
    <h1 style="color:red;">Hook: {{ implode(' ', $hookName) }}</h1>

</div>
