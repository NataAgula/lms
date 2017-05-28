<h1> Program: {{ $program->name }}</h1>

<p>
	Faculty:
	{{ $program->faculty->name }}
</p>

<p>
	Mandatory Credits:
	{{ $program->mandatory_credits }}
</p>

<p>
	Optional Credits:
	{{ $program->optional_credits }}
</p>

<a href="{{ route('programs.edit', $program->id) }}">Edit</a>