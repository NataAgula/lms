<form action="{{ route('buildings.store') }}" method="post">
{{ csrf_field() }}



<p>
{{ $errors->first('name') }}
Name:

<input type="text" name="name" value="{{ old('name') }}">
</p>

<p>
{{ $errors->first('address') }}
Address:

<input type="text" name="address" value="{{ old('address') }}">
</p>

<button type="submit">Save</button>

</form>