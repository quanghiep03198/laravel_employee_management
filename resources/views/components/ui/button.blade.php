@props(['variant' => 'default', 'shape' => 'default', 'icon' => null])

@php
   $classes =
       'inline-flex text-sm justify-center items-center p-2 gap-x-2 rounded-md transition-opacity focus:ring-0 focus:outline-none hover:opacity-90 focus:opacity-80 duration-300';

   switch ($variant) {
       case 'outline':
           $classes = $classes . ' border border-px border-gray-200 text-foreground bg-background';
           break;
       case 'primary':
           $classes = $classes . ' bg-primary text-foreground-contrast';
           break;
       case 'secondary':
           $classes = $classes . ' bg-primary text-foreground-contrast';
           break;
       default:
           $classes = $classes . ' bg-background-contrast text-foreground-contrast';
           break;
   }
   switch ($shape) {
       case 'square':
           $classes = $classes . ' w-8 h-8 aspect-square';
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