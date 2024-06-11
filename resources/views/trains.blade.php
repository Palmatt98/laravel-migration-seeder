@extends('layouts.app')

@section('content')
	<h2>Treni</h2>
	<ul>
		@foreach ($trains as $item)
			<li>{{ $item}}</li>
		@endforeach
	</ul>
@endsection