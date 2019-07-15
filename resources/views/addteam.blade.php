@extends('layouts.app')

@section('content')
<h1>Add Video</h1>
{!! Form::open(['url'=>'team/save']) !!}
	<div class="form-group">
		 {{Form::label('name','Name')}}
		 {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'Enter Team Name'])}}
	</div>
	<div class="form-group">
		 {{Form::label('description','Description')}}
		 {{Form::textarea('description','',['class'=>'form-control', 'placeholder'=>'Add Description'])}}
	</div>
	<div class="form-group">
		 {{Form::label('facebook','Facebook')}}
		 {{Form::text('facebook','',['class'=>'form-control', 'placeholder'=>'Enter Facebook Account'])}}
	</div>
	<div class="form-group">
		 {{Form::label('twitter','Twitter')}}
		 {{Form::text('twitter','',['class'=>'form-control', 'placeholder'=>'Enter Twitter Account'])}}
	</div>
	<div class="form-group">
		 {{Form::label('instagram','Instagram')}}
		 {{Form::text('instagram','',['class'=>'form-control', 'placeholder'=>'Enter Instagram Account'])}}
	</div>
	<div>
		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
	</div>
{!! Form::close() !!}
@endsection