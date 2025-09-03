<div style="border: 1px solid red; padding:20px; background-color: {{ $color }};">
    <h1>{{ $salutation }}, {{ strtoupper($name) }}</h1>

    <select wire:model.live="salutation">
        @foreach ($salutationOptions as $salutation)
            <option value="{{ $salutation }}">{{ $salutation }}</option>
        @endforeach
    </select>

    <input type="color" wire:model.live="color">
</div>
