@props(['label'])

<label {{ $attributes->merge(['class' => 'inline-block text-sm font-medium leading-6 text-white px-4'])}}>{{ $label }}</label>