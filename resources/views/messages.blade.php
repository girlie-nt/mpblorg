@extends('layouts.app')

@section('content')
<div>
	<table class="table">
		<tr>
			<th>From: Name</th>
			<th>Email</th>
			<th>Message</th>
		</tr>
	@foreach($messages as $message)
		<tr>
			<td>{{$message->name}}</td>
			<td>{{$message->email}}</td>
			<td>{{$message->message}}</td>
		</tr>
	@endforeach
	</table>
</div>
@endsection