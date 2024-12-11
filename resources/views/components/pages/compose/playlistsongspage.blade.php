@props(['songs', 'playlist', 'user'])

<div class="border-b-2 w-full bg-color1 p-2 rounded-t-2xl flex gap-2 overflow-x-scroll custom-scrollbar">
    @if(count($songs) > 0)
        @foreach ($songs as $song)
            <div class="relative">
                <x-walkman.resultlink image=""  src="{{ asset('images/headphone.png') }}" href="/library/songs/{{ $song->id }}/show" name="{{ $song->name }}" type="{{ $song->artist->name }} Song"/>
                @if($playlist->user_id === $user->id)
                    <x-forms.form class="absolute top-0 right-0 m-1 mr-2" action="/compose/remove/{{ $playlist->id }}/{{ $song->id }}" id="removeplaylistsong-{{ $song->id }}" method="DELETE">
                        <x-forms.form-iconbtn form="removeplaylistsong-{{ $song->id }}" src="delete.png" function="Remove"/>
                    </x-forms.form>
                @endif
            </div>
        @endforeach
    @else
        <h3 class="font-vt323 text-color3 text-3xl p-6">No Results Found</h3>
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
            @if ($songs instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $songs->links() }}
            @endif
        </div>
    </div>
</x-walkman.footer>