<x-layout>
    <x-banner>Echo Music</x-banner>
    <x-walkman.walkman>
        <x-walkman.body>
            <div class="bg-color1 w-4/5 h-4/5 rounded-3xl flex flex-col items-center justify-start gap-10 max-md:w-full">
                <x-pages.compose.userlibrarypage :playlists="$playlists" :song="$song ?? ''"/>
            </div>
            <x-walkman.play-button src="play.png" form="searchArtistForm"/>
        </x-walkman.body>
    </x-walkman.walkman>
</x-layout>