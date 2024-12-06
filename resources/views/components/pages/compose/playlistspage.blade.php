<x-forms.form class="absolute top-0 left-0 w-0 h-0 overflow-hidden" action="/compose/search/playlists" id="searchPlaylistForm" method="get"/>
<x-searchbar placeholder="Search a Playlist" form="searchPlaylistForm"/>
<x-walkman.cassete/>
<x-walkman.footer>
    <div class="newFlex gap-5">
        <x-link href="/compose/playlists" text="Playlists"/>
        <x-link href="/compose/playlist/create" text="Create a Playlist"/>
    </div>
</x-walkman.footer>