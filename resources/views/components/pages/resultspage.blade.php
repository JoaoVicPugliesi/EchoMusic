@props(['artists' => [], 'albums' => [], 'songs' => [] ])

<div class="border-b-2 w-full m-10 p-2 border-color3 flex gap-2 overflow-x-scroll custom-scrollbar">
    @if(count($artists) > 0 || count($albums) > 0 || count($songs) > 0)
        @foreach ($artists as $artist)
            <x-walkman.resultlink src="artist.png" href="/library/artists/{{ $artist->id }}/info" name="{{ $artist->name }}" type="Artist"/>
        @endforeach

        @foreach ($albums as $album)
            <x-walkman.resultlink src="album.png" href="/library/albums/{{ $album->id }}/info" name="{{ $album->name }}" type="{{ $album->artist->name }} Album"/>
        @endforeach

        @foreach ($songs as $song)
            <x-walkman.resultlink src="headphone.png" href="/library/songs/{{ $song->id }}/info" name="{{ $song->name }}" type="{{ $song->artist->name }} Song"/>
        @endforeach

    @else
        <h3 class="font-vt323 text-color3 text-3xl p-2">No Results Found</h3>
    @endif
</div>

<x-walkman.cassete />
<x-walkman.footer>
    <div class="flex flex-col items-center justify-center gap-2">
        <div class="newFlex gap-5">
            <x-link href="/library/artists" text="Artists"/>
            <x-link href="/library/songs" text="Songs"/>
            <x-link href="/library/albums" text="Albums"/>
        </div>
        <div>
            @if ($artists instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $artists->links() }}
            @endif

            @if ($albums instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $albums->links() }}
            @endif

            @if ($songs instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $songs->links() }}
            @endif
        </div>
    </div>
</x-walkman.footer>