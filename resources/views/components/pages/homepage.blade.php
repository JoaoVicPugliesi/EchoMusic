@props(['name'])

<x-text>
    @auth
        Welcome back {{ $name }}! <br> Echo Music is a place where you can discover and share music. Enjoy!
    @endauth

    @guest
        Welcome! Echo Music is a place where you can discover and share music. Enjoy!
    @endguest
</x-text>
<x-walkman.cassete />

<x-walkman.footer>
    @auth
        <div class="newFlex gap-5">
            <x-link href="/profile" text="See Profile"></x-link>

            <x-forms.form action="/logout" id="logoutform" method="delete">
                    <x-forms.form-button>
                        Log Out
                    </x-forms.form-button>
            </x-forms.form>
        </div>
    @endauth

    @guest
        <div class="newFlex gap-5">
            <x-link href="/login" text="Log In"/>
            <x-link href="/register" text="Register"/>
        </div>
    @endguest
</x-walkman.footer>
