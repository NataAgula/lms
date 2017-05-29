<a href="{{ route('users.create') }}">Create</a>


<ul>
@foreach($users as $user)
<li><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></li>

@endforeach

</ul>