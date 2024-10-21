@props(['title', 'album', 'genre', 'cover_image', 'release_date'])

<!-- Song Details Component -->
<!-- Limit the overall container width to make the component more compact -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <!-- Song Title -->
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 2rem;">{{ $title }}</h1><!-- Heading with larger text and colour -->
    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <!-- Image is further restricted to a smaller size -->
        <img src="{{ $cover_image }}" alt="{{ $title }}" class="w-full max-w-xs h-auto object-cover"> <!-- Restrict image to max-w-xs (20 rem) and ensure responsiveness -->
    </div>
    <!-- Album Title -->
    <h2 class="text-gray-500 font-semibold mb-4" style="font-size:1rem;">{{ $album }}</h2>
    <h2 class="text-gray-500 mb-4" style="font-size:1rem;">{{ $genre }}</h2>   

    <p class="text-gray-700 leading-relaxed">{{ $release_date }}</p> <!-- Text is spaced out for readability -->
</div>
