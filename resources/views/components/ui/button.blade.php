@props(['variant' => 'default', 'shape' => 'default', 'icon' => null])

@php
	$classes =
	    'inline-flex text-sm justify-center items-center px-4 py-1.5 gap-x-2 rounded-md transition-all focus:ring-0 focus:outline-none hover:opacity-90 active:opacity-80 duration-200 ';

	switch ($variant) {
	    case 'outline':
	        $classes =
	            $classes .
	            ' border border-px border-gray-200 text-foreground bg-background';
	        break;
	    case 'primary':
	        $classes = $classes . ' bg-primary text-foreground-contrast';
	        break;
	    case 'secondary':
	        $classes = $classes . ' bg-primary text-foreground-contrast';
	        break;
	    case 'destructive':
	        $classes =
	            $classes .
	            ' bg-destructive text-foreground-contrast [&>i]:text-foreground-contrast';
	        break;
	    default:
	        $classes =
	            $classes . ' bg-background-contrast text-foreground-contrast';
	        break;
	}
	switch ($shape) {
	    case 'square':
	        $classes = $classes . '!p-2 w-8 h-8 aspect-square';
	        break;
	    default:
	        break;
	}

	if (isset($icon)) {
	    $icon = 'bi-' . $icon;
	}

@endphp


<button {{ $attributes->merge(['type' => 'submit', 'class' => $classes]) }}>
	@if (isset($icon))
		<i class="bi {{ $icon }}"></i>
	@endif
	{{ $slot }}
</button>
