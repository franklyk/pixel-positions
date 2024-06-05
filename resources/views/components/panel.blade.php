@php
    $classes = 'p-4 bg-white/5 rounded-xl  border flex gap-x-6 border-transparent hover:border-blue-800 group transition-colors duration-300'
@endphp

<div
    {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
