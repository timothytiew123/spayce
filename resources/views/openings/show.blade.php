@extends('layouts.app')

@section('content')
<div class="container">
	<button class="btn btn-primary"><a style="color:white" href="/openings">Go Back</a></button>
	<br><br>

	@if(isset($opening))

		<h2>Title: {{$opening->title}}</h2>
		<h3>Category: {{$opening->category}}</h3>

		<img  style="width: 400px"src="/storage/cover_images/{{$opening->cover_image}}">
		<div>
			<div class="py-3"></div>
			<h3>Description:</h3>
			<p>{!! $opening->description !!}</p>
		</div>

		<hr>
		<small>Written on {{$opening->created_at}} by {{$opening->user['name']}}</small>
	@else
		<p>This opening no longer exists</p>
	@endif

	<hr>
	@auth
		@if(Auth::user()->id === $opening->user_id)
		<a href ="/openings/{{$opening->id}}/edit" class="btn btn-secondary">Edit</a>

		{{ Form::open(['action' => ['OpeningsController@destroy', $opening->id], 'method' => 'post', 'class' => 'float-right'])}}
			{{Form::hidden('_method', 'DELETE')}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		{{ Form::close() }}
		@endif
	@endauth
</div>
<div class="py-3"></div>
@endsection