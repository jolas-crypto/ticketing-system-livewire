@props([
    'label' => '',
    'placeholder' => '',
    'name' => ''
])

<div>
    <label 
        for="{{ $attributes->whereStartsWith('wire:model')->first() }}"
        class="label">
        {{ $label }}
    </label>
    <div class="mt-2">
        <textarea 
            {{ $attributes->whereStartsWith('wire:model') }}
            id="{{ $attributes->whereStartsWith('wire:model')->first() }}" 
            name="{{ $name }}" 
            rows="3"
            placeholder="{{ $placeholder }}"
            class="textarea-class"></textarea>
    </div>
</div>