<a href="{{ route('programs.courses.create', $program->id) }}">Add</a>
<h1>{{ $program->name }}</h1>

<ul>
    @foreach($programCourses as $pc)
    <li>{{ $pc->course->name }} ({{ $pc->type }})</li>
    @endforeach
</ul>
