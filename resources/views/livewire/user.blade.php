<div>
    <input wire:model.live="name" />
    <h1>Name: {{ $name }}</h1>
    <input wire:model.live="surname">
    <h1>Surname: {{ $surname }}</h1>
    <h1 style="color:red;">Hook: {{ $hookName }}</h1>

</div>
