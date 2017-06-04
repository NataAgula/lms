<form action="{{ route('rooms.store') }}" method="post">
{{ csrf_field() }}



<p>
{{ $errors->first('name') }}
Name:
<input type="text" name="name" value="{{ old('name') }}">
</p>

<p>
{{ $errors->first('building_id') }}
Building:
<select name="building_id">
	@foreach ($buildings as $building)
	<option 
		value="{{ $building->id }}"
		@if (old('building_id') == $building->id)
		selected
		@endif
	>
	{{ $building->name }}
	</option>
	@endforeach

</select>
</p>


<p>
{{ $errors->first('floors') }}
Floor #:
<input type="number" name="floors" value="{{ old('floors') }}">
</p>

<p>
{{ $errors->first('students') }}
Number of Students:
<input type="number" name="students" value="{{ old('students') }}">
</p>

<button type="submit">Save</button>

</form>