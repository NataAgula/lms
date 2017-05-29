<form action="{{ route('users.update', $user->id) }}" method="post">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">


<p>
{{ $errors->first('name') }}
Name:

<input type="text" name="name" value="{{ $user->name }}">
</p>


<p>
{{ $errors->first('email') }}
Email:

<input type="email" name="email" value="{{ $user->email }}">
</p>

<p>
{{ $errors->first('password') }}
Password:

<input type="password" name="password" value="{{ $user->password }}">
</p>

<p>
    {{ $errors->first('userType') }}
    Type:
    <select name="userType">
        <option
            value="Admin"
            @if (old('type') == 'A')
            selected
            @endif
        >
            Admin
        </option>
        <option
            value="Student"
            @if (old('type') == 'S')
            selected
            @endif
        >
            Student
        </option>
         <option
            value="Professor"
            @if (old('type') == 'P')
            selected
            @endif
        >
            Professor
        </option>
    </select>
    </p>


<button type="submit">Save</button>

</form>