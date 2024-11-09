<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Song')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Back button -->
                <div class="mt-4 px-5 flex space-x-2">
                    <a href="{{ route('songs.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        < Back
                    </a>
                </div>
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Add a New Song:</h3>

                    <!-- Using the SongForm component for song creation -->
                    <x-song-form
                        :action="route('songs.store')"
                        :method="'POST'"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

