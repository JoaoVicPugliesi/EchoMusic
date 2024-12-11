@props(['playlist'])

<x-text class="text-6xl m-5 w-4/5 text-center">
    Update Playlist
</x-text>
<x-walkman.cassete />
<x-walkman.footer>
    <x-forms.form action="/compose/{{ $playlist->id }}/update" id="editform" method="PATCH">
        <x-forms.form-input type="name" name="name" placeholder="" :value="$playlist->name"  />
        <x-forms.form-input type="description" name="description" placeholder="" :value="$playlist->description" />
    </x-forms.form>
    <x-link href="/library/search/songs" text="Add a Song"/>
</x-walkman.footer>