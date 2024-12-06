@props(['href', 'src'])

<a href="{{ $href }}" draggable="false"><img class="w-5 hover:scale-110" src="{{ asset('/images/' . $src) }}" alt="" draggable="false"></a>
