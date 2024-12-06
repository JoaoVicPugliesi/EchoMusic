@props(['song'])
    <x-header>
        <x-pages.library.playsongpage :song="$song"/>
    </x-header>
    <x-walkman.cassete />
    <x-walkman.footer>
    <div class="newFlex gap-5">
        <x-link href="/library/artists" text="Artists"/>
        <x-link href="/library/songs" text="Songs"/>
        <x-link href="/library/albums" text="Albums"/>
    </div>
</x-walkman.footer>