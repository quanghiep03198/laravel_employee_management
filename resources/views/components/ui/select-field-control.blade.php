@props(['options' => [], 'label', 'name', 'placeholder' => '-- Select --'])

@php
   $errorMessages = $errors->get($name);
   $id = uniqid('select');

@endphp

<div class="space-y-2">
   <x-ui.form-label>{{ $label }}</x-ui.form-label>
   <x-ui.select name="{{ $name }}" id="{{ $id }}" class="w-full">
      <option>{{ $placeholder }}</option>
      @foreach ($options as $option)
         <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
      @endforeach
   </x-ui.select>
   <x-ui.input-error :messages="$errorMessages" />
</div>
