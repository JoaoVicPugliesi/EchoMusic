@props(['user', 'auth'])

    <x-header>
        <img class="w-10 hover:scale-110" src="{{ asset('/images/listener.png') }}" alt="" draggable="false">
        <div class="text-color1 font-vt323 h-full w-full overflow-hidden overflow-y-scroll custom-scrollbar">
            <div class="flex items-center gap-2">
                <h3 class="text-2xl">{{ $user->name }}</h3>
                <x-iconlink href="/compose/user/{{ $user->id }}/show" src="library.png" function="Library"/>
                @if($user->id != $auth->id)
                    <x-iconlink href="#" src="nofavorite.png" function="Favorite"/>
                @else 
                    <x-iconlink href="/profile/edit" src="edit.png" function="Edit"/>
                @endif
            </div>
            <p class="text-gray-400 text-wrap">{{ $user->description }}</p>
        </div>
    </x-header>
    <x-walkman.cassete />
    <x-walkman.footer>
            <div class="newFlex gap-5">
                <x-link href="/compose/playlists" text="Playlists"/>
                <x-link href="/compose/playlist/create" text="Create a Playlist"/>
            </div>
</x-walkman.footer>