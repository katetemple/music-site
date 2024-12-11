<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Artists')}}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Artist Details</h3>
                    <x-artist-details 
                        :name="$artist->name"
                        :image="$artist->image"
                        :bio="$artist->bio"
                        :dob="$artist->dob"
                    />   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
