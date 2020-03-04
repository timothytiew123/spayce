@extends('layouts.app')

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@section('content')
<div class="container">
	<h2 class="text-center">Create a new opening</h2>

	{{ Form::open(['action' => 'OpeningsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    	@csrf
    	<div class="form-group">

    		{{Form::label('title','Title')}}
            
    		{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}

            <label for="category">Category</label>
            <select name="category" class="form-control">
                <option value="sports">Sports</option>
                <option value="outdoor">Outdoor</option>
            </select>
            
    	</div>

    	<div class="form-group">

    		{{Form::label('description','Description')}}
    		{{Form::textarea('description','',['id' => 'ckeditor' ,'class' => 'form-control', 'placeholder' => 'Description'])}}
    		<script>
                CKEDITOR.replace( 'ckeditor' );
            </script>
    	</div>

        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
    	{{Form::submit('Submit',['class' => 'btn btn-primary'])}}

	{{ Form::close() }}
</div>
@endsection