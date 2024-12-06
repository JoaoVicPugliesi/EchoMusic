@props(['href', 'name', 'type', 'src' => null])

<a {{ $attributes->merge(['href' => $href, 'class' => 'bg-color bg-color3 p-2 max-w-40 min-w-40 text-nowrap newFlex flex-col text-center rounded cursor-pointer select-none vhs-hover', 'draggable' => 'false']) }}>
        <img class="w-10 transition-all 0.4s hover:scale-110" src="{{ asset('images/' . $src ) }}" alt="" draggable="false">
        <h3 class="text-color1 font-vt323 text-3xl overflow-hidden overflow-x-scroll w-full custom-scrollbar">{{ $name }}</h3>
        <h3 class="font-vt323 w-full overflow-hidden overflow-x-scroll custom-scrollbar text-gray-400">{{ $type }}</h3>
</a>