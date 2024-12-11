@props(['artist'])

    <x-header>
    <img class="{{ $artist->image == '' ? 'w-10' : 'w-20 rounded-full'}} hover:scale-110" src="{{ $artist->image == '' ? asset('/images/mars.png') : $artist->image }}" alt="" draggable="false">
        <div class="text-color1 font-vt323 h-full w-full overflow-hidden overflow-y-scroll custom-scrollbar">
            <div class="flex items-center gap-2">
                <h3 class="text-2xl">{{ $artist->name }}</h3>
                <x-iconlink href="/library/artist/{{ $artist->id }}/show" src="library.png" function="Library"/>
                <x-iconlink href="#" src="nofavorite.png" function="Favorite"/>
            </div>
            <p class="text-gray-400 text-wrap">{{ $artist->description }}</p>
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