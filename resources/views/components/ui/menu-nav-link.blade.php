@props(['href', 'active'])

@php
    $classes =
        $active ?? false
            ? 'hover:bg-primary hover:text-foreground-contrast transition-colors duration-300 text-foreground-contrast group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold cursor-pointer'
            : 'hover:bg-primary hover:text-foreground-contrast transition-colors text-muted duration-300  group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold cursor-pointer';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
