@props(['album'])

    <x-header>
        <div class="newFlex flex-col p-3">
            <img class="{{$album->image == '' ? 'w-10' : 'w-20 rounded-full' }} hover:scale-110" src="{{ $album->image == '' ? asset('/images/album.png') : $album->image }}" alt="" draggable="false">
            <h3 class="text-2xl">{{ $album->year }}</h3>
        </div>
        <div class=" h-full w-full overflow-hidden overflow-y-scroll custom-scrollbar">
            <div class="flex items-center justify-start gap-4">
                <h3 class="text-2xl min-w-5 max-w-40 overflow-x-scroll text-nowrap custom-scrollbar">{{ $album->name }}</h3>
                <a class="hover:underline transition-all ease-in-out" href="/library/album/{{ $album->id }}/songs" draggable="false"><h3 class="text-2xl text-gray-400 min-w-12 max-w-40 overflow-x-scroll text-nowrap custom-scrollbar" draggable="false">{{ count($album->songs) }} {{ count($album->songs) > 1 ? 'songs' : 'song' }}</h3></a>
                <div class="overflow-hidden overflow-x-scroll custom-scrollbar min-w-10 max-w-36 flex gap-2">
                    @foreach($album->artists as $artist)
                        <a class="hover:underline transition-all ease-in-out" href="/library/artists/{{ $artist['id'] }}/show" draggable="false"><h3 class="text-2xl text-red-500 text-nowrap" draggable="false">{{ $artist['name'] }}.</h3></a>
                    @endforeach
                </div>
                <x-iconlink href="#" src="nofavorite.png" function="Favorite"/>
            </div>
            <p class="text-gray-400 text-wrap">{{ $album->description }} Imagine each paragraph as a sandwich. The real content of the sandwich—the meat or other filling—is in the middle. It includes all the evidence you need to make the point. But it gets kind of messy to eat a sandwich without any bread. Your readers don’t know what to do with all the evidence you’ve given them. So, the top slice of bread (the first sentence of the paragraph) explains the topic (or controlling idea) of the paragraph. And, the bottom slice (the last sentence of the paragraph) tells the reader how the paragraph relates to the broader argument. In the original and revised paragraphs below, notice how a topic sentence expressing the controlling idea tells the reader the point of all the evidence.</p>
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