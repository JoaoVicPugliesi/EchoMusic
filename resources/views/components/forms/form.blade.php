@props(['action', 'id', 'method'])

<form 
    {{ $attributes->merge(['class' => 'w-max h-max newFlex flex-col flex-wrap gap-1']) }} 
    method="POST"
    action="{{ $action }}"
    id="{{ $id }}"
>
    @csrf
    @method($method)
    {{ $slot }}
</form>
