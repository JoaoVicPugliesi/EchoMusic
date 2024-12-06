@props([
    'type',
    'artist' => '',
    'album' => '',
    'song' => '',
])

@if($type === 'artist')
    <x-pages.library.artistinfopage
        :artist="$artist"
        />
@elseif($type === 'album')
    <x-pages.library.albuminfopage
        :album="$album"
    />
@elseif($type === 'song')
    <x-pages.library.songinfopage
        :song="$song"
    />
@endif