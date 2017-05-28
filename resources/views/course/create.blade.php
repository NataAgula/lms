<form action="{{ route('courses.store') }}" method="post">
{{ csrf_field() }}



<p>
{{ $errors->first('name') }}
Name:
<input type="text" name="name" value="{{ old('name') }}">
</p>

<p>
{{ $errors->first('credits') }}
Credits:
<input type="number" name="credits" value="{{ old('credits') }}">
</p>

<button type="submit">Save</button>

</form>