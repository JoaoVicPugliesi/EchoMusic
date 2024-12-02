@props(['type', 'name', 'author'])

@if($type === 'artist')
    <x-text>
        {{ $name }}
    </x-text>
    <x-walkman.cassete />
    <x-walkman.footer>
            <div class="newFlex gap-5">
                <x-link href="/library/artists" text="Artists"/>
                <x-link href="/library/songs" text="Songs"/>
                <x-link href="/library/albums" text="Albums"/>
            </div>
    </x-walkman.footer>
@elseif($type === 'album')
    <x-text>
        {{ $name }} ... {{ $author }}
    </x-text>
    <x-walkman.cassete />
    <x-walkman.footer>
            <div class="newFlex gap-5">
                <x-link href="/library/artists" text="Artists"/>
                <x-link href="/library/songs" text="Songs"/>
                <x-link href="/library/albums" text="Albums"/>
            </div>
    </x-walkman.footer>
@elseif($type === 'song')
    <x-text>
        {{ $name }}
    </x-text>
    <x-walkman.cassete />
    <x-walkman.footer>
            <div class="newFlex gap-5">
                <x-link href="/library/artists" text="Artists"/>
                <x-link href="/library/songs" text="Songs"/>
                <x-link href="/library/albums" text="Albums"/>
            </div>
    </x-walkman.footer>
@endif