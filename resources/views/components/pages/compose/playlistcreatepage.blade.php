<x-text class="text-6xl m-5 w-4/5 text-center">
    Create a Playlist
</x-text>
<x-walkman.cassete />
<x-walkman.footer>
    <x-forms.form action="/compose/playlists" id="createplaylistform" method="post">
        <x-forms.form-input type="text" name="name" placeholder="Name" :value="old('name')" />
        <x-forms.form-input type="text" name="description" placeholder="Description" :value="old('description')"/>
    </x-forms.form>
    <x-link href="/compose/playlists" text="Playlists"/>
</x-walkman.footer>