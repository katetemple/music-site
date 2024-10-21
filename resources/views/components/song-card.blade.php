@props(['title', 'album', 'genre', 'cover_image', 'release_date'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <!-- <p class="text-gray-800">{{ $album }}</p> -->
    <!-- <p class="text-gray-600">{{ $genre }}</p> -->
    <img src="{{$cover_image}}" alt="{{$title}}">
    <!-- <p class="text-gray-600">{{ $release_date }}</p> -->
</div>