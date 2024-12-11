@props(['song', 'user'])

    <x-header>
        <div class="newFlex flex-col p-3">
            <img class="{{ $song->image == '' ? 'w-10' : 'w-20 rounded-full'}} hover:scale-110" src="{{ $song->image == '' ? asset('/images/headphone.png') : $song->image }}" alt="" draggable="false">
        </div>
        <div class=" h-full w-full overflow-hidden overflow-y-scroll custom-scrollbar">
            <div class="flex items-center gap-3">
                <h3 class="text-2xl min-w-12 max-w-40 overflow-x-scroll text-nowrap  custom-scrollbar">{{ $song->name }}</h3>
                <a class="hover:underline transition-all ease-in-out" href="/library/albums/{{$song->albumId}}/show"><h3 class="text-2xl text-red-500 min-w-12 max-w-52 overflow-x-scroll text-nowrap  custom-scrollbar">From {{ $song->album }}</h3></a>
                <div class="newFlex gap-3">
                    <x-iconlink href="#" src="nofavorite.png" function="Favorite"/>
                    <x-iconlink href="/library/{{ $song->id }}/add" src="folder.png" function="Add to a playlist"/>
                    <x-iconlink href="/library/{{ $song->id }}/play" src="play.png" function="Play"/>
                </div>
            </div>
            <p class="text-gray-400 text-wrap">Imagine each paragraph as a sandwich. The real content of the sandwich—the meat or other filling—is in the middle. It includes all the evidence you need to make the point. But it gets kind of messy to eat a sandwich without any bread. Your readers don’t know what to do with all the evidence you’ve given them. So, the top slice of bread (the first sentence of the paragraph) explains the topic (or controlling idea) of the paragraph. And, the bottom slice (the last sentence of the paragraph) tells the reader how the paragraph relates to the broader argument. In the original and revised paragraphs below, notice how a topic sentence expressing the controlling idea tells the reader the point of all the evidence.</p>
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