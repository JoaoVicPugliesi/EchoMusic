@props(['user'])

<x-text class="text-6xl m-5 w-4/5 text-center">
    Update Profile
</x-text>
<x-walkman.cassete />
<x-walkman.footer>
    <x-forms.form action="/profile/update" id="editform" method="PATCH">
        <x-forms.form-input type="name" name="name" placeholder="" :value="$user->name"  />
        <x-forms.form-input type="description" name="description" placeholder="" :value="$user->description" />
    </x-forms.form>
    <x-link href="#" text="Update Password"/>
</x-walkman.footer>