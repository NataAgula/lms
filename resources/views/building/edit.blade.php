<form action="{{ route('buildings.update', $building->id) }}" method="post">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">


<p>
{{ $errors->first('name') }}
Name:

<input type="text" name="name" value="{{ $building->name }}">
</p>

<p>
{{ $errors->first('address') }}
Name:

<input type="text" name="address" value="{{ $building->address }}">
</p>

<button type="submit">Save</button>

</form>