@extends('layouts.app')

@section('content')
<section id="main" class="full">
	<div class="wrapper-inside">
		<div class="main-text col-md-12 animatedParent animateOnce">
			<div class="row main-top animated fadeIn">
				<h1 style="text-align: center; margin: 0 !important;font-family: 'montserrat';"><span style="color:#d51d25;"><span style="font-family: 'modia'">DJMC </span>EVENTS PRESENTS</span><br> <span style="color: #093577;">MPBL DUBAI</span></h1>
			</div>
			<div class="row animated fadeInRight" style="background-color: #fff;">
				<div class="col-md-4">
					<div class="imgdiv">
						<img src="/src/imgs/tanduay_big.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="imgdiv">
						<img src="/src/imgs/davaologo.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="imgdiv">
						<img src="/src/imgs/imuslogo.jpg">
					</div>
				</div>
			</div>
			<div class="row text-inside" style="background-color: #fb1e28e0;">
				<div class="col-md-4">
					<h3>BATANGAS CITY ATHLETICS</h3><small> (2018-PRESENT)</small>
					<label>LOCATION – BATANGAS CITY, LIPA CITY BATANGAS, PHILIPPINES</label>
					<label>HEAD COACH – GOLDWIN MONTEVERDE</label>
					<span><a href="https://www.facebook.com/tanduayathletics"><i class="fa fa-facebook-square"></i>Tanduay Athletics FB Account</a></span>
				</div>
				<div class="col-md-4">
					<h3>DAVAO OCCIDENTAL TIGERS</h3>
					<label>HEAD COACH – DON DULAY</label>
					<p><a href="https://www.facebook.com/davaoccidentaltigers"><i class="fa fa-facebook-square"></i>Davao Occidental Tigers FB Account</a></p>
				</div>
				<div class="col-md-4">
					<h3>IMUS BANDERA </h3>
					<small>(2018 – PRESENT)</small>
					<label>HEAD COACH – MIKE ORQUILLAS</label>
					<p><a href="https://www.facebook.com/imusbandera"><i class="fa fa-facebook-square"></i>Imus Bandera FB Account</a></p>
				</div>
			</div>
			<div class="row main-bottom">
				<span style="width: 100%;">
					<a class="btn col-md-4" style="background-color: #094cb1;">Book your tickets</a>
					<label class="col-md-4" style="font-size: 18px;float: right;">Sept 27-28, 2019 | 8:00 PM</label>
					<label class="countdown col-md-4" style="text-align: center;font-size: 20px;" data-countdown="2019/09/27"></label>
				</span>
			</div>
		</div>
	</div>
</section>
<section id="highlight" class="full">
	<div class="wrapper-inside animatedParent animateOnce">
		<div class="highlight-video col-md-6 animated fadeInLeft" style="float: left; margin-top: 50px" >
		<?php
			$Essence = new Essence\Essence();
			$embedded = $Essence->extract($video->url);
			echo $embedded->html;
		?>
		</div>
		<div class="highlight-text col-md-6" style="float: right;">
			<div class="highlight-inside animated fadeInRight">
				<h1>{{$video->title}}</h1>
				<p><?php echo $video->description; ?></p>
			</div>
		</div>
	</div>
</section>
<section id="about" class="full">
	<div class="wrapper-inside">
		<div class="about-text col-md-12">
			<div class="about-inside animatedParent animateOnce">
				<h1 class="slow animated bounceInDown"><span style="color:#1453b4;">MAHARLIKA PILIPINAS</span> <span style="color: #d51d25;">BASKETBALL LEAGUE</span></h1>
				<div class="slow animated fadeIn">
					<p>
						Manny Pacquiao launched the Maharlika Pilipinas Basketball League on August 29, 2017. According to Pacquiao, the league is not intended to be a competitor to the Philippine Basketball Association, the country's top professional basketball league. The MPBL will feature both a regional commercial and barangay-level league with teams on the commercial side to have a home locality in addition to a corporate sponsor.
					</p>
					<p>
						In the first months, the league hosted teams from Luzon with future plans to expand to accommodate teams based in Visayas and Mindanao like the defunct Metropolitan Basketball Association. It is planned that an expanded MPBL will have two conferences, North and South, where the best teams from both divisions will face in the finals similar to the format of the National Basketball Association of the United States.
					</p>
					<p>
						The league was planned to start as early as September 23, 2017 with at least six teams. A pre-season was held with the Bulacan Kuyas finishing as champions.
					</p>
					<p>
						The inaugural cup of the MPBL, the Anta Rajah Cup commenced on January 25, 2018 and was participated in by ten teams.[6] In the opening game at the Smart Araneta Coliseum, the Parañaque Patriots secured a 70-60 victory over the Caloocan Supremos.[7] The first conference was ran until April 19, 2018 where the Batangas City Athletics crowned as the league's first-ever champion.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
	

@endsection

@section('sidebar')
	@parent
	<p>this is appended</p>
@endsection