@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  focus:ring-opacity-50 rounded-md focus:ring-0 ']) !!}>
