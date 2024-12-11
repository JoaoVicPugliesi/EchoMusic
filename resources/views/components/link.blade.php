@props(['href', 'text'])

<a {{ $attributes->merge(['class' => 'text-color1 bg-color3 px-2 py-1 rounded max-md:px-1']) }} href="{{ $href }}" draggable="false">
    <h3 class="font-vt323 text-xl hover:text-gray-400 max-md:text-lg">{{ $text }}</h3>
</a>