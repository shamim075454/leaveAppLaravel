@extends('layout')
@section('content')
	@if ($firstName == 'Md.Shamim')
		<h1>About me : {{ $firstName }}  {{ $lastName }}</h1>
	@else
		<h1>No hi message</h1>
    @endif
	
	@if (count(@peoples))
		<ul>
		@foreach ($peoples as $person)
			<li> {{ $person }} </li>
		@endforeach
		</ul>
	@endif
@stop	   
    