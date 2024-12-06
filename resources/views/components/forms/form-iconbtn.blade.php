@props(['form', 'src'])

<button type="submit" form="{{ $form }}" draggable="false"><img class="w-5 hover:scale-110" src="{{ asset('/images/' . $src) }}" alt="" draggable="false"></button>
