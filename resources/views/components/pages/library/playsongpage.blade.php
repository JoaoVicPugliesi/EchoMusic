@props(['song'])

<div class="flex justify-between items-center w-full h-full">
    <div class="newFlex flex-col ml-2">
        <img class="w-10 hover:scale-110" src="{{ asset('/images/headphone.png') }}" alt="">
        <h3 class="text-2xl min-w-5 max-w-32 text-nowrap overflow-hidden overflow-x-scroll custom-scrollbar">{{ $song->name }}</h3>
        <div class="newFlex gap-2">
            <h3 class="text-1xl min-w-4 max-w-16 overflow-hidden overflow-x-scroll custom-scrollbar text-nowrap text-gray-400">{{ implode('. ', $song->artists) }}.</h3>
            <x-iconlink href="#" src="nofavorite.png" function="Favorite" class="top-2/4 -translate-y-full -mt-6"/>
            <x-iconlink href="#" src="repeat.png" function="Repeat" class="top-2/4 -translate-y-full -mt-6"/>
        </div>
        </div>
            <div class="flex h-full justify-end items-center flex-col gap-3">
                <div class="">
                    <img class="w-8 cursor-pointer" src="{{ asset('/images/pause.png') }}" alt="">
                </div>
                <div class="newFlex gap-2 mb-1">
                    <h3>0.00</h3>
                    <div class="relative">
                        <div class="bg-color1 w-52 h-1 rounded relative cursor-pointer"></div>
                        <div class="bg-red-500 w-10 h-1 rounded absolute top-0 left-0 cursor-pointer"></div>
                    </div>
                    <h3>{{ $song->duration }}</h3>
                </div>
            </div>
        <div class="flex h-full justify-end items-end gap-2 mb-3">
            <x-iconlink href="#" src="lyrics.png" function="Lyrics" class="top-2/4 -translate-y-full -mt-6"/>
            <x-iconlink href="#" src="playlist.png" function="Add to a playlist" class="top-2/4 -translate-y-full -mt-6"/>
            <x-iconlink href="#" src="audio.png" function="Volume" class="top-2/4 -translate-y-full -mt-6"/>
            <div class="relative mb-2">
                <div class="bg-gray-400 w-10 h-1 rounded cursor-pointer relative"></div>
                <div class="bg-color1 w-5 h-1 rounded cursor-pointer absolute top-0"></div>
            </div>
        </div>
</div>