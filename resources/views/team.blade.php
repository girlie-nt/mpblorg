@extends('layouts.app')

@section('content')
<section class="full allpages">
	<div class="container team2 animatedParent">
		<label class="team-label"><span style="color:#d51d25;">MPBL</span><span style="color: #216ada;"> TEAMS AND CELEBRITIES</span></label>
		@if(!empty($team))
			@foreach($team as $details)
			<div class="perteam">
				<div class="col-md-6 animated fadeInLeft">
					<div id="myCarousel_{{$details->id}}" class="carousel slide">
						<div class="carousel-inner" style="margin-left: 24px;">
							@foreach($details->photos as $key => $photo)
							<div class="{{($key==0) ? 'active ' : ''}}item">
								<img src="/src/imgs/mpbl/{{$photo}}" style="width: 450px;" >
							</div>
							@endforeach							
						</div>
						@if(count($details->photos) > 1)
						<a class="carousel-control left round" href="#myCarousel_{{$details->id}}" data-slide="prev" style="margin-left: -20px">&#8249;</a>
						<a class="carousel-control right round" href="#myCarousel_{{$details->id}}" data-slide="next">&#8250;</a>
						@endif
					</div>
				</div>
				<div class="col-md-6 animated fadeInRight">
					<div id='team_{{$details->id}}' class="teamdiv">
						<label class="playername">{{$details->name}}</label>
						<div style="display: inherit;" class="playerdesc">
							<p><?php echo $details->description; ?></p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		@endif
	</div>
</section>

@endsection