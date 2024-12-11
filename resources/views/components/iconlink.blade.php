@props(['href', 'src', 'function'])

<div class="relative group">
    <a href="{{ $href }}" draggable="false"><img class="w-5 hover:scale-110" src="{{ asset('/images/' . $src) }}" alt="" draggable="false"></a>
    <p {{ $attributes->merge(['class' => 'absolute left-2/4 -translate-x-2/4 hidden w-max group-hover:block bg-color1 text-color3 p-1 rounded mt-1']) }}>{{ $function }}</p>
</div>
