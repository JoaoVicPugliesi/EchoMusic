@props(['src'])

<div class="flex justify-center items-center mt-5">
    <div class="w-40 h-1 bg-color1"></div>
        <button type="submit"><img class="w-12 select-none" src="{{ asset('images/' . $src) }}" alt="" draggable="false"></button>
    <div class="w-40 h-1 bg-color1"></div>
</div>