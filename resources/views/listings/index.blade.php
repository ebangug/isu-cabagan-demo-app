<x-layout>
    @include('listings._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        </div>

        {{ $listings->links() }}
    </main>
</x-layout>
