@props(['playlist', 'user'])

    <x-header>
        <div class="newFlex flex-col p-3">
            <img class="w-10 hover:scale-110" src="{{ asset('/images/redplaylist.png') }}" alt="" draggable="false">
            <div class="md:hidden max-md:newFlex max-md:mt-2 max-md:gap-1">
                <x-iconlink href="/compose/playlists/{{ $playlist->id }}/edit" src="edit.png" function="Edit"/>
                <x-forms.form action="/compose/playlists/{{ $playlist->id }}/destroy" id="deleteplaylistform" method="DELETE">
                    <x-forms.form-iconbtn form="deleteplaylistform" src="delete.png" function="Delete"/>
                </x-forms.form>
            </div>
            <h3 class="text-2xl">{{ $playlist->year }}</h3> 
        </div>
        <div class=" h-full w-full overflow-hidden overflow-y-scroll custom-scrollbar">
            <div class="flex items-center justify-start gap-4">
                <h3 class="text-2xl min-w-12 max-w-40 overflow-x-scroll text-nowrap custom-scrollbar max-lg:text-xl max-lg:max-w-24">{{ $playlist->name }}</h3>
                <a class="hover:underline transition-all ease-in-out" href="/compose/playlist/{{ $playlist->id }}/songs" draggable="false"><h3 class="text-2xl text-gray-400 min-w-12 max-w-40 overflow-x-scroll text-nowrap custom-scrollbar max-lg:text-xl max-lg:max-w-24" draggable="false">{{ count($playlist->songs) }} songs</h3></a>
                <a class="hover:underline transition-all ease-in-out" href="/compose/users/{{ $playlist->user_id }}/show" draggable="false"><h3 class="text-2xl text-red-500 min-w-12 max-w-36 overflow-x-scroll text-nowrap custom-scrollbar max-lg:text-xl max-lg:max-w-24" draggable="false">By {{ $playlist->user->name }}</h3></a>
                @if($playlist->user->id != $user->id)
                    <x-iconlink href="#" src="nofavorite.png" function="Favorite"/>

                @else
                <div class="hidden md:newFlex md:gap-4">
                    <x-iconlink href="/compose/playlists/{{ $playlist->id }}/edit" src="edit.png" function="Edit"/>
                    <x-forms.form action="/compose/playlists/{{ $playlist->id }}/destroy" id="deleteplaylistform" method="DELETE">
                        <x-forms.form-iconbtn form="deleteplaylistform" src="delete.png" function="Delete"/>
                    </x-forms.form>
                </div>
                @endif
            </div>
            <p class="text-gray-400 text-wrap">{{ $playlist->description }} Imagine each paragraph as a sandwich. The real content of the sandwich—the meat or other filling—is in the middle. It includes all the evidence you need to make the point. But it gets kind of messy to eat a sandwich without any bread. Your readers don’t know what to do with all the evidence you’ve given them. So, the top slice of bread (the first sentence of the paragraph) explains the topic (or controlling idea) of the paragraph. And, the bottom slice (the last sentence of the paragraph) tells the reader how the paragraph relates to the broader argument. In the original and revised paragraphs below, notice how a topic sentence expressing the controlling idea tells the reader the point of all the evidence.</p>
        </div>
    </x-header>
    <x-walkman.cassete />
    <x-walkman.footer>
            <div class="newFlex gap-5">
                <x-link href="/compose/playlists" text="Playlists"/>
                <x-link href="/compose/playlist/create" text="Create a Playlist"/>
            </div>
</x-walkman.footer>