<form action="{{ route('programs.courses.store', $program->id) }}" method="post">
    {{ csrf_field() }}
    <p>
    {{ $errors->first('course_id') }}
    Course:
    <select name="course_id">
        @foreach($courses as $course)
        <option
            value="{{ $course->id }}"
            @if (old('course_id') == $course->id)
            selected
            @endif
        >
            {{ $course->name }}
        </option>
        @endforeach
    </select>
    </p>
    <p>
    {{ $errors->first('type') }}
    Type:
    <select name="type">
        <option
            value="M"
            @if (old('type') == 'M')
            selected
            @endif
        >
            Mandatory
        </option>
        <option
            value="O"
            @if (old('type') == 'O')
            selected
            @endif
        >
            Optional
        </option>
    </select>
    </p>
    <button type="submit">Save</button>
</form>