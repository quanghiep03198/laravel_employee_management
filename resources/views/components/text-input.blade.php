@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 focus:border-primary focus:!ring-0 rounded-md shadow-sm py-1.5 px-2 text-sm placeholder:text-sm',
]) !!}>
