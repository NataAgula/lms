<a href="{{ route('faculties.create') }}">Create</a>


<ul>
@foreach($faculties as $fac)
<li>{{ $fac->name }}</li>

@endforeach

</ul>