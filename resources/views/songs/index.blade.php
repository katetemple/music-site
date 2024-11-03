<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Songs') }}
        </h2>
    </x-slot>
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="border p-4 rounded-lg shadow-md">
                        <h3 class="font-semibold text-lg mb-4">List of Songs:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($songs as $song)
                            <div class="flex flex-col">
                                <a href="{{ route('songs.show', $song) }}">
                                    <x-song-card 
                                        :title="$song->title"
                                        :genre="$song->genre"
                                        :album="$song->album"
                                        :release_date="$song->release_date"
                                        :cover_image="$song->cover_image"
                                    />
                                </a>

                                <!-- Edit and Delete buttons -->
                                <div class="mt-4 flex space-x-2">
                                    <a href="{{ route('songs.edit', $song) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>

                                    <!-- Delete button (form is needed to send delete request) -->
                                    <!-- Button route to songs.destroy, passing $song object -->
                                    <form action="{{ route('songs.destroy', $song) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this song?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
