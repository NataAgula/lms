<a href="{{ route('courses.create') }}">Create</a>


<ul>
@foreach($courses as $course)
<li><a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a></li>

@endforeach

</ul>