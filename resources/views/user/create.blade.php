<form action="{{ route('users.store') }}" method="post">
{{ csrf_field() }}



<p>
{{ $errors->first('name') }}
Name:
<input type="text" name="name" value="{{ old('name') }}">
</p>

<p>
{{ $errors->first('email') }}
Email:

<input type="email" name="email" value="{{ old('email') }}">
</p>

<p>
{{ $errors->first('password') }}
Password:

<input type="password" name="password" value="{{ old('password') }}">
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