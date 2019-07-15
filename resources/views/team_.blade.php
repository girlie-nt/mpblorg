@extends('layouts.app')

@section('sidebar')
<!-- @parent -->
<div class="players-name">
	<h2>Team 2019</h2>
	<ul>
		@foreach($team as $names)
		<li class="team_name" data-target="team_{{$names->id}}" data-photo="photo_{{$names->id}}">{{$names->name}}</li>
		@endforeach
	</ul>
</div>
<div class="players-img">
	@php $a = 1; @endphp
	@foreach($team as $photo)
		<span class="photodiv <?php echo ($a==1)?'d-content' : 'd-none'; ?>" id="photo_{{$photo->id}}">
			<img src="/src/imgs/players/{{$photo->photo}}" style="width: 250px;" >
		</span>
	@php $a++; @endphp
	@endforeach
</div>
@endsection

@section('content')
@if(!empty($team))
	@php $i = 1; @endphp
	@foreach($team as $details)
	<div id='team_{{$details->id}}' class="teamdiv <?php echo ($i==1)?'d-content' : 'd-none'; ?>">
		<label class="playername">{{$details->name}}</label>
		<div style="display: inherit;">
			<p><?php echo $details->description; ?></p>
		</div>
	</div>
	@php $i = 1; @endphp
	@php $i++; @endphp
	@endforeach
@endif
@endsection