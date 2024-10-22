@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $song->title ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="genre" class="block text-sm text-gray-700">Genre</label>
        <input
            type="text"
            name="genre"
            id="genre"
            value="{{ old('genre', $song->genre ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('genre')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="album" class="block text-sm text-gray-700">album</label>
        <input
            type="text"
            name="album"
            id="album"
            value="{{ old('album', $song->album ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('album')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="release_date" class="block text-sm text-gray-700">release_date</label>
        <input
            type="date"
            name="release_date"
            id="release_date"
            value="{{ old('release_date', $song->release_date ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('release_date')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="cover_image" class="block text-sm font-medium text-gray-700">Song Cover Image</label>
        <input
            type="file"
            name="cover_image"
            id="cover_image"
            {{ isset($song) ? : 'required'}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('cover_image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @isset($song->cover_image)
        <div class="mb-4">
            <img src="{{ asset($song->cover_image) }}" alt="Song Cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($song) ? 'Update Song' : 'Add Song' }}
        </x-primary-button>
    </div>
</form>