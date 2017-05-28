<h1> Course: {{ $course->name }}</h1>

<p>
	Credits:
	{{ $course->credits }}
</p>

<a href="{{ route('courses.edit', $course->id) }}">Edit</a>