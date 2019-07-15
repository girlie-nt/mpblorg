@extends('layouts.app')

@section('content')
<div class="form-group col-md-4">
	{!! Form::open(['url'=>'/admin/loginuser']) !!}
		{{Form::label('username','Username/Email')}}
		{{Form::text('username','',['class'=>'form-control', 'placeholder'=>'Enter Username or Email'])}}

		<label>Password</label>
		<input type="password" name="password" class="form-control" />

		<input type="submit" name="login" value="Login">
	{!! Form::close() !!}
</div>

@endsection