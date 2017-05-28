<form action="{{ route('courses.update', $course->id) }}" method="post">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">


<p>
{{ $errors->first('name') }}
Name:

<input type="text" name="name" value="{{ $course->name }}">
</p>

<p>
{{ $errors->first('credits') }}
Credits:
<input type="number" name="credits" value="{{ $course->credits }}">
</p>

<button type="submit">Save</button>

</form>