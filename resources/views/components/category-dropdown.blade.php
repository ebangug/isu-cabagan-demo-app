<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold inline-flex w-full lg:w-32">
            Categories
            <x-icons name="dropdown" />
        </button>
    </x-slot>

    <x-dropdown-item href="/">All</x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}" :active="request('category') === $category->slug">
            {{ $category->name }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
