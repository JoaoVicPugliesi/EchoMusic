<div class="flex">
    <x-navlink href="/" src="home.png" :active="request()->is('/', 'home')"/>
    <x-navlink href="/library" src="library.png"  :active="request()->is('library')"/>
    <x-navlink href="/compose" src="add2.png"  :active="request()->is('compose')"/>
    <x-navlink href="/profile" src="guest.png"  :active="request()->is('profile')"/>
</div>