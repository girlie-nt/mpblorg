@extends('layouts.app')

@section('content')
<section class="full allpages">
	<div class="wrapper-inside contact-form">
		<h1><span style="color: #1f5fbf">Contact </span><span style="color:#d51d25;"> Us</span></h1>
	{!! Form::open(['url'=>'contact/submit']) !!}
		<div class="form-group">
			 {{Form::label('email','Email Address')}}
			 {{Form::text('email','',['class'=>'form-control', 'placeholder'=>'Enter Name'])}}
		</div>
		<div class="form-group">
			 {{Form::label('name','Name')}}
			 {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'Enter Name'])}}
		</div>
		<div class="form-group">
			 {{Form::label('message','Message')}}
			 {{Form::textarea('message','',['class'=>'form-control', 'placeholder'=>'Enter Name'])}}
		</div>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
	{!! Form::close() !!}
	</div>
</section>
@endsection