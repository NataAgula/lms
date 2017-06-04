<a href="{{ route('rooms.create') }}">Create</a>


<ul>
@foreach($rooms as $room)
<li><a href="{{ route('rooms.show', $room->id) }}">{{ $room->name }} ({{ $room->building->name }})</a></li>

@endforeach

</ul>