@props(['@change' => null])

@php
    $classes =
        'border-border focus:border-primary focus:!ring-0 rounded-md shadow-sm py-1.5 px-2 text-sm placeholder:text-sm placeholder:text-muted';

@endphp

<div x-data="{ isEmpty: false }">
    <select {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </select>
</div>
