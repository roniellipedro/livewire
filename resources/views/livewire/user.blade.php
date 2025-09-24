<div>
    <input wire:model.live="name" />
    <h1>Name: {{ $name }}</h1>
    <h1 style="color:red;">Hook: {{ $hookName }}</h1>
    <h1 style="color:blue;">PropertyName: {{ $propertyName }}</h1>
    <h1 style="color:green;">PropertyValue: {{ $propertyValue }}</h1>
</div>
