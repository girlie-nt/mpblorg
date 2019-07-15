@extends('layouts.app')

@section('content')
<h1>Add Video</h1>
{!! Form::open(['url'=>'video/save']) !!}
	<div class="form-group">
		 {{Form::label('title','Title')}}
		 {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Enter Title'])}}
	</div>
	<div class="form-group">
		 {{Form::label('url','Url')}}
		 {{Form::text('url','',['class'=>'form-control', 'placeholder'=>'Enter Video Url'])}}
	</div>
	<div class="form-group">
		 {{Form::label('description','Description')}}
		 {{Form::textarea('description','',['class'=>'form-control', 'placeholder'=>'Add Description'])}}
	</div>
	<div>
		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
	</div>
{!! Form::close() !!}
@endsection