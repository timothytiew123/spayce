@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="text-center">All Openings</h2>

    <div class="row py-3">
		<div class="col-md-4 py-2">

			{{ Form::open(['url' => '/openings/search', 'method' => 'GET']) }}

				<label for="category">Search by Category</label>
		        <select name="category" class="form-control">
		        	<option selected value="allcategories">All Categories</option>
		            <option value="sports">Sports</option>
		            <option value="outdoor">Outdoor</option>
		        </select>
		</div>
			
		<div class="col-md-4 py-2">
			<label for="search">Search by Text</label>
			<div class="input-group">
				<input type="search" class="form-control" name="search">
				<span class="input-group-prepend">
					<button type="submit" class="btn btn-primary">Search</button>
				</span>
			</div>
			{{ Form::close() }}
		</div>
    </div>


    @if(count($openings) >0)
    <div class="row">
		@foreach($openings as $opening)
		<div class="col-md-4 px-1 py-1">
			<div class="card text-center">
			  <img src="/storage/cover_images/{{$opening->cover_image}}" class="card-img-top" style="object-fit: cover; width: 100%;
    height: 200px;">
			  <div class="card-body">
			    <h5 class=""> {{$opening->title}}</h5>
			    <a href="/openings/{{$opening->id}}" class="btn btn-primary">View</a><br>
			    <small class="card-text">Created on {{ \Carbon\Carbon::parse($opening->created_at)->format('d/m/Y')}} by {{$opening->user['name']}}</small><br>
			  </div>
			</div>
		</div>
		@endforeach
	</div>
	<br>
		{{$openings->links()}}
	@else
		<p>No posts found</p>
	@endif

</div>
@endsection