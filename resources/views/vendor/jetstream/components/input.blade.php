@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#FF385C]
focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>