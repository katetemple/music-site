@props(['name', 'bio', 'image', 'dob'])

<!-- Artist details component -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">

    <!-- Artist Name -->
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 2rem;">{{ $name }}</h1><!-- Heading with larger text and colour -->

    <!-- Artist Image -->
    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <img src="{{ asset('images/artists/' . $image) }}" alt="{{ $name }}" class="w-full  h-auto object-cover"> <!-- Restrict image to max-w-xs (20 rem) and ensure responsiveness -->
    </div>

    <div class="text-gray-700 leading-relaxed">
        <!-- Display dob only when its not null (to accomodate for bands) -->
        @if($dob)
            <p><span class="font-bold text-lg text-black">Born on:</span> {{ \Carbon\Carbon::parse($dob)->format('F d, Y') }}</>
        @endif
        <p class="mt-2"><span class="font-bold text-lg text-black">Bio:</span> {{ $bio }}</p>
    </div>


    <!-- Artist DOB
    <h2 class="text-gray-500 mb-4" style="font-size:1rem;">Born on: {{ \Carbon\Carbon::parse($dob)->format('F d, Y') }}   </h2>

    <!-- Artist Bio -->
    <!-- <h2 class="text-gray-500 font-semibold mb-4" style="font-size:1rem;">{{ $bio }}</h2> --> 
    
    
</div>