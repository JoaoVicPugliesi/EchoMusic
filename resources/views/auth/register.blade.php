<x-layout>
    <x-banner>Echo Music</x-banner>

    <x-walkman.walkman>
        <x-walkman.body>
            <div class="bg-color1 w-4/5 h-4/5 rounded-3xl flex flex-col items-center justify-start gap-10 max-md:w-full relative">
                <x-pages.auth.registerpage/>
            </div>
            <x-walkman.play-button src="play.png" form="registerform"/>
        </x-walkman.body>
    </x-walkman.walkman>
    <div class="newFlex gap-2 m-5 w-max h-max">
        <x-forms.form-error name="name" />
        <x-forms.form-error name="email" />
        <x-forms.form-error name="password" />
        <x-forms.form-error name="password_confirmation" />
    </div>
</x-layout>