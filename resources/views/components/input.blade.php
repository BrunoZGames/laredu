@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#3E154E] focus:ring-[#3E154E] rounded-md shadow-sm']) !!}>
