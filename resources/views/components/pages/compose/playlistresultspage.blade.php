@props(['playlists' => []])

<div class="border-b-2 w-full bg-color1 p-2 rounded-t-2xl flex gap-2 overflow-x-scroll custom-scrollbar">
    @if(count($playlists) > 0)
        @foreach ($playlists as $playlist)
            <x-walkman.resultlink src="redplaylist.png" href="/compose/playlists/{{ $playlist->id }}/show" name="{{ $playlist->name }}" type="{{ $playlist->user->name }} playlist"/>
        @endforeach
    @else
        <h3 class="font-vt323 text-color3 text-3xl p-6">No Results Found</h3>
    @endif
</div>

<x-walkman.cassete />
<x-walkman.footer>
    <div class="flex flex-col items-center justify-center gap-2">
        <div class="newFlex gap-5">
            <x-link href="/compose/playlists" text="Playlists"/>
            <x-link href="/compose/playlist/create" text="Create a Playlist"/>
        </div>
        <div>
            @if ($playlists instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $playlists->links() }}
            @endif
        </div>
    </div>
</x-walkman.footer>