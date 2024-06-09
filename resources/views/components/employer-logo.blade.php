@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl">

{{-- <img src="https://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width}}" alt="" class="rounded-xl"> --}}