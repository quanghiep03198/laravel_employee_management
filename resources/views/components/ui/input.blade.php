@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-border focus:border-primary focus:!ring-0 rounded-md shadow-sm py-1.5 px-2 text-sm placeholder:text-sm',
]) !!}>
