<form action="{{ route('rooms.update', $room->id) }}" method="post">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">


<p>
{{ $errors->first('name') }}
Name:

<input type="text" name="name" value="{{ $room->name }}">
</p>

<p>
{{ $errors->first('building_id') }}
Building:
<select name="building_id">
	@foreach ($buildings as $b)
	<option 
		value="{{ $b->id }}"
		@if ($room->building_id == $b->id)
		selected
		@endif
	>
	{{ $b->name }}
	</option>
	@endforeach

</select>
</p>


<p>
{{ $errors->first('floors') }}
Floor #:
<input type="number" name="floors" value="{{ $room->floors }}">
</p>

<p>
{{ $errors->first('students') }}
Students:
<input type="number" name="students" value="{{ $room->students }}">
</p>

<button type="submit">Save</button>

</form>