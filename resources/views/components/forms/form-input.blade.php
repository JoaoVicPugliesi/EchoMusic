@props(['type', 'name', 'placeholder', 'value' => ''])

<input 
class="bg-color3 outline-none placeholder-color1 text-color1 py-1 px-2 rounded font-vt323"
type="{{ $type }}"
name="{{ $name }}"
placeholder="{{ $placeholder }}"
spellcheck="false"
value="{{ old($name, $value) }}"
autocomplete="off"
required>