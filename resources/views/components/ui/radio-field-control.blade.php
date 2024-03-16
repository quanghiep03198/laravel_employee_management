@props(['options' => [], 'label', 'name'])

@php
    $errorMessages = $errors->get($name);
    // dd($options);
@endphp

<div class="space-y-2">
    <x-ui.form-label>{{ $label }}</x-ui.form-label>
    @foreach ($options as $option)
        <div class="inline-flex items-center gap-x-2">
            <label for="{{ $option['value'] }}" class="text-sm">
                {{ $option['label'] }}
            </label>

            <input type="radio" name="{{ $name }}" id="{{ $option['value'] }}" value="{{ $option['value'] }}"
                class="border-border text-primary focus:!ring-1 focus:!ring-primary" />
        </div>
    @endforeach
    <x-ui.input-error :messages="$errorMessages" />
</div>
