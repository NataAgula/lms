<h1>Name: {{ $user->name }} </h1>

<p>E-mail: {{ $user->email }}</p>

<p>User Type: {{ $user->userType }}</p>

<a href="{{ route('users.edit', $user->id) }}">Edit</a>