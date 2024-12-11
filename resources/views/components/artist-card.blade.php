@props(['name', 'bio', 'image'])

<!-- Displays name and image -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-center text-lg">{{ $name }}</h4>
    <img class="w-44 h-44 object-cover rounded-full mx-auto"  src="{{ asset('images/artists/' . $image) }}" alt="{{$name}}">
</div>