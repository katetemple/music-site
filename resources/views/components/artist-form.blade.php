<!-- Define artist prop to ensure the component receives artist data if editing a artist -->
@props(['action', 'method', 'artist' => null])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif
    
    <!-- Name input field -->
    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $artist->name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Bio input field -->
    <div class="mb-4">
        <label for="bio" class="block text-sm text-gray-700">Bio</label>
        <input
            type="text"
            name="bio"
            id="bio"
            value="{{ old('bio', $artist->bio ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('bio')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- dob input field -->
    <div class="mb-4">
        <label for="dob" class="block text-sm text-gray-700">Date of Birth</label>
        <input
            type="date"
            name="dob"
            id="dob"
            value="{{ old('dob', $artist ? $artist->dob->format('Y-m-d') : '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('dob')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- image input field -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Artist Image</label>
        <!-- Image required only when adding a artist -->
        <input
            type="file"
            name="image"
            id="image"
            @if(!isset($artist)) required @endif
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Display existing image if editing an existing artist -->
    @if(optional($artist)->image)
        <div class="mb-4">
            <img src="{{ asset('images/artists/' . $artist->image) }}" alt="Artist Image" class="w-24 h-32 object-cover">
        </div>
    @endif

    <div>
        <x-primary-button>
            {{ isset($artist) ? 'Update Artist' : 'Add Artist' }}
        </x-primary-button>
    </div>
</form>