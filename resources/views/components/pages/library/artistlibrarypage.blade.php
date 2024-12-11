@props(['albums', 'artist'])

<x-header class="px-2 h-max">
    <div class="flex justify-start items-center w-full h-full text-start gap-2">
        <h3 class="text-2xl w-max text-nowrap">Discografy:</h3>
        <div class="flex overflow-hidden overflow-x-scroll custom-scrollbar">
            @foreach ($albums as $album)
                <x-walkman.resultlink :image="$album->image" src="{{ $album->image == '' ? asset('/images/') : $album->image }}" href="/library/albums/{{ $album->id }}/show" name="{{ $album->name }}" type="{{ $artist->name }} Album"/>
            @endforeach
        </div>
    </div>
    
</x-header>
<x-walkman.cassete />
<x-walkman.footer>
<div class="newFlex gap-5">
    <x-link href="/library/artists" text="Artists"/>
    <x-link href="/library/songs" text="Songs"/>
    <x-link href="/library/albums" text="Albums"/>
</div>
</x-walkman.footer>