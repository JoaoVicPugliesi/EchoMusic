@props(['href', 'src', 'active' => false])

<a class="{{ $active ? 'bg-color4' : 'bg-color3' }} rounded-t-md p-1 w-40 newFlex border-r-2 border-color1 max-tablet:w-20"
   href="{{ $href }}"
   aria-current="{{ $active ? 'page' : 'false' }}"
   draggable="false">
    <img class="w-8 select-none" src="{{ asset('images/' . $src) }}" alt="" draggable="false">
</a>