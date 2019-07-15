@extends('layouts.app')

@section('content')	
	<div class="wrapper-inside">
	<h4>Order the list</h4>
	{!! Form::open(['url'=>'/team/order']) !!}
		@foreach($team as $perteam)
			<input type="text" name="orderby[{{$perteam->id}}]" id="{{$perteam->id}}" value="{{$perteam->orderin}}" size="5" style="color: #000;">
			<span style="font-size: 16px;">{{$perteam->name}} </span>
			</br>
		@endforeach
		<input type="submit" name="Save" value="Save" class="btn btn-primary">
	{!! Form::close() !!}
	</div>
@endsection