<x-text class="text-7xl m-5 w-4/5 text-center">
    Make a Login
</x-text>
<x-walkman.cassete />
<x-forms.form-error name="email" />
<x-forms.form-error name="password" />
<x-walkman.footer>
    <x-forms.form action="/login" id="loginform" method="post">
        <x-forms.form-input type="email" name="email" placeholder="email" :value="old('email')" />
        <x-forms.form-input type="password" name="password" placeholder="password" />
    </x-forms.form>
    <x-link href="/register" text="Or Register"/>
</x-walkman.footer>