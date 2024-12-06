@props(['href', 'text'])

<a {{ $attributes->merge(['class' => 'text-color1 bg-color3 px-2 py-1 rounded']) }} href="{{ $href }}" draggable="false">
    <h3 class="font-vt323 text-xl hover:text-gray-400">{{ $text }}</h3>
</a>