@props(['name', 'errors', 'label', 'type' => 'text', 'placeholder' => '', 'defaultValue' => '', 'description' => null])

@php
   $errorMessages = $errors->get($name);
@endphp

<div class="w-full space-y-1">
   <x-ui.form-label :value="$label" />
   <x-ui.input :value="old($name, $defaultValue)" :name="$name" :type="$type" class="w-full" :placeholder="$placeholder" />
   <x-ui.input-error :messages="$errorMessages" />
   @if (isset($description))
      <small class="font-medium text-gray-500">{{ $description }}</small>
   @endif
</div>
