@props(['form', 'src', 'function' => ''])

<div class="relative group text-center flex">
    <button type="submit" form="{{ $form }}" draggable="false"><img class="w-5 hover:scale-110" src="{{ asset('/images/' . $src) }}" alt="" draggable="false"></button>
    <p class="absolute left-2/4 font-vt323 -translate-x-2/4 hidden w-max group-hover:block bg-color1 text-color3 p-1 rounded mt-6">{{ $function }}</p>
</div>
