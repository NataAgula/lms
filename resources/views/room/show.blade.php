<h1> Room: {{ $room->name }}</h1>

<p>
	Building:
	{{ $room->building->name }}
</p>

<p>
	Floor #:
	{{ $room->floors }}
</p>

<p>
	Students:
	{{ $room->students }}
</p>

<a href="{{ route('rooms.edit', $room->id) }}">Edit</a>
