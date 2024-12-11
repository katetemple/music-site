<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Artists') }}
        </h2>
    </x-slot>

    <!-- Display success message after creating, editing, deleting -->
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Search Bar -->
                <form action="{{ route('artists.index') }}" class="p-6"  method="GET">
                    <input type="text" name="search" placeholder="Search for an artist..." value="{{ request('search') }}" class="rounded">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Search
                    </button>
                </form>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="border p-4 rounded-lg ">
                        <h3 class="font-semibold text-lg mb-4">List of Artists:</h3>

                        <!-- Display each artist in grid layout -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach($artists as $artist)
                            <div class="flex flex-col">
                                <!-- Link to details page -->
                                <a href="{{ route('artists.show', $artist) }}">
                                    <x-artist-card 
                                        :name="$artist->name"
                                        :bio="$artist->bio"
                                        :image="$artist->image"
                                    />
                                </a>
                            </div>
                            @endforeach
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
