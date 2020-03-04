@extends('layouts.app')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@section('content')
<div class="container">
    <h1>Edit Opening</h1>

    {{ Form::open(['action' => ['OpeningsController@update', $opening->id], 'method' => 'opening', 'enctype' => 'multipart/form-data']) }}
        
        <div class="form-group">

            {{Form::label('title','Title')}}
            {{Form::text('title', $opening->title,['class' => 'form-control', 'placeholder' => 'Title'])}}

            <label for="category">Category</label>
            <select name="category" class="form-control">
                <option value="sports">Sports</option>
                <option value="outdoor">Outdoor</option>
            </select>

        </div>

        <div class="form-group">

            {{Form::label('title','Description')}}
            {{Form::textarea('description',$opening->description,['id' => 'ckeditor' ,'class' => 'form-control', 'placeholder' => 'Description Text'])}}
            <script>
                CKEDITOR.replace( 'ckeditor' );
            </script>
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class' => 'btn btn-primary float-right'])}}
        </div>
        <img style="width: 200px"src="/storage/cover_images/{{$opening->cover_image}}"><br><br>

    {{ Form::close() }}
</div>
@endsection
