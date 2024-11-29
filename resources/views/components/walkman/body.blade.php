<div class="bg-color2 w-4/5 p-5 rounded-3xl newFlex flex-col max-md:w-2/4 min-w-[400px]">
    <div class="bg-color1 w-4/5 h-4/5 rounded-3xl flex flex-col items-center justify-start gap-10 max-md:w-full">
        {{ $slot }}
    </div>
    <x-walkman.play-button src="play.png" />
</div>

