<x-text class="text-7xl m-5 w-4/5 text-center">
    Register
</x-text>
<x-walkman.cassete />
<x-forms.form-error name="name" />
<x-forms.form-error name="email" />
<x-forms.form-error name="password" />
<x-forms.form-error name="password_confirmation" />
<x-walkman.footer>
    <x-forms.form action="/register" id="registerform" method="post">
        <x-forms.form-input type="text" name="name" placeholder="name" :value="old('email')" />
        <x-forms.form-input type="email" name="email" placeholder="email" :value="old('email')" />
        <x-forms.form-input type="password" name="password" placeholder="password" />
        <x-forms.form-input type="password" name="password_confirmation" placeholder="ensure password" />
    </x-forms.form>
    <x-link href="/login" text="Or Log In"/>
</x-walkman.footer>