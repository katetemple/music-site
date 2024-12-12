@props(['title', 'album', 'genre', 'cover_image', 'release_date', 'artists'])

<!-- Song Details Component -->
<!-- Limit the overall container width to make the component more compact -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">

    <!-- Song Title -->
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 2rem;">{{ $title }}</h1><!-- Heading with larger text and colour -->
    

    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <!-- Image is further restricted to a smaller size -->
        <img src="{{ asset('images/songs/' . $cover_image) }}" alt="{{ $title }}" class="w-full max-w-xs h-auto object-cover"> <!-- Restrict image to max-w-xs (20 rem) and ensure responsiveness -->
    </div>

    <!-- Artists Section -->
    <div class="text-gray-700 leading-relaxed">
        <p><span class="font-bold text-lg text-black">Artists:</span>
            @foreach ($artists as $artist)
                <li>{{ $artist->name }}</li>
            @endforeach
        </p>

        <!-- Album Title -->
        <p class="mt-2"><span class="font-bold text-lg text-black">Album:</span> {{ $album }}</p>
        
        <!-- Genre -->
        <p class="mt-2"><span class="font-bold text-lg text-black">Genre:</span> {{ $genre }}</p>

        <!-- Release Date -->
        <p class="mt-2"><span class="font-bold text-lg text-black">Release Date:</span> {{ \Carbon\Carbon::parse($release_date)->format('F d, Y') }}</>
    </div>
</div>
