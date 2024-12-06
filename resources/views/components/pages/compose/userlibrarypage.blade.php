@props(['playlists'])

<x-header class="px-2">
    <div class="flex justify-start items-center w-full h-full text-start gap-2">
        <h3 class="text-2xl w-max text-nowrap">Playlists:</h3>
        <div class="flex overflow-hidden overflow-x-scroll custom-scrollbar">
            @foreach ($playlists as $playlist)
                <x-walkman.resultlink src="redplaylist.png" href="/compose/playlists/{{ $playlist->id }}/show" name="{{ $playlist->name }}" type="{{ $playlist->user->name }} Playlist"/>
            @endforeach
        </div>
    </div>
    
</x-header>
<x-walkman.cassete />
<x-walkman.footer>
<div class="newFlex gap-5">
    <x-link href="/compose/playlists" text="Playlists"/>
    <x-link href="/compose/playlist/create" text="Create a Playlist"/>
</div>
</x-walkman.footer>