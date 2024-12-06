<x-header class="flex-col">
    <p {{ $attributes->merge(['class' => 'text-color1 max-w-3/4 font-vt323 text-2xl border-b-2 m-5 border-color3 px-2 text-center max-tablet:text-xl']) }}>
        {{ $slot }}
    </p>
</x-header>