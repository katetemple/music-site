<x-app-layout>
<h1>HELLO<h1>
@if(count($songs) > 0)
    <ul>
        @foreach($songs as $song)
            <li>{{ $song->title }}</li>
        @endforeach
    </ul>
@else
    <p>No songs found for "{{ $query }}"</p>
@endif

</x-app-layout>