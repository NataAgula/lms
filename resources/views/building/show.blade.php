<h1>{{ $building->name }}</h1>

<p>{{ $building->address }}</p>

<a href="{{ route('buildings.edit', $building->id) }}">Edit</a>