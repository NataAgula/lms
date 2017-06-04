<a href="{{ route('buildings.create') }}">Create</a>


<ul>
@foreach($buildings as $b)
<li><a href="{{ route('buildings.show', $b->id) }}">{{ $b->name }}</a></li>

@endforeach

</ul>