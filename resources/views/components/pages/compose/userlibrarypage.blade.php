@props(['playlists', 'song'])

<x-header class="px-2">
    <div class="flex justify-start items-center w-full h-full text-start gap-2">
        <h3 class="text-2xl w-max text-nowrap">Playlists:</h3>
        <div class="flex overflow-hidden overflow-x-scroll custom-scrollbar">
            @foreach ($playlists as $playlist)
            <div class="relative">
                <x-walkman.resultlink src="redplaylist.png" href="/compose/playlists/{{ $playlist->id }}/show" name="{{ $playlist->name }}" type="{{ $playlist->user->name }} Playlist"/>
                @if($song != '' && !$playlist->songs->contains($song->id))
                    <x-forms.form class="absolute top-0 right-0 m-1 mr-1" action="/compose/add/{{ $playlist->id }}/{{ $song->id }}" id="addplaylistsong-{{ $song->id }}-{{ $playlist->id }}" method="POST">
                        <x-forms.form-iconbtn form="addplaylistsong-{{ $song->id }}-{{ $playlist->id }}" src="folder.png" function="Add"/>
                    </x-forms.form>
                @endif
            </div>
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