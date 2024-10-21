<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Songs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Songs:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($songs as $song)
                        <a href="{{ route('songs.show', $song) }}">
                            <x-song-card 
                                :title="$song->title"
                                :genre="$song->genre"
                                :album="$song->album"
                                :release_date="$song->release_date"
                                :cover_image="$song->cover_image"
                            />
                        </a>
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
