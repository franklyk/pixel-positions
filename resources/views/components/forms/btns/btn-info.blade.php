@props(['type' => 'a'])

@if ($type == 'a')
    <a
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-blue-800 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-indigo-600 transition ease-in-out duration-150 hover:bg-blue-700']) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-blue-800 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-blue-800 transition ease-in-out duration-150 hover:bg-blue-700']) }}>
        {{ $slot }}
    </button>
@endif
