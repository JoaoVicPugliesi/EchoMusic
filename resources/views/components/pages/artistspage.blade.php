<x-forms.form class="absolute top-0 left-0 w-0 h-0 overflow-hidden" action="/library/search/artists" id="searchArtistForm" method="get"/>
<x-searchbar placeholder="Search an Artist" form="searchArtistForm"/>
<x-walkman.cassete/>
<x-walkman.footer>
    <div class="newFlex gap-5">
        <x-link href="/library/artists" text="Artists"/>
        <x-link href="/library/songs" text="Songs"/>
        <x-link href="/library/albums" text="Albums"/>
    </div>
</x-walkman.footer>