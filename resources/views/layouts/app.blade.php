<!DOCTYPE html>
<html>
<head>
	<title>MBPL</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link rel="stylesheet" type="text/css" href="/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="/css/animate/css/animations.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="/js/custom.js"></script>
	<!-- <script type="text/javascript" src="/js/animate.js"></script> -->
	<script type="text/javascript" src="/js/jquery.countdown/jquery.countdown.js"></script>
 
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
       
</head>
<body>
	@include('includes.navbar')

	<!-- original conditioned body contents -->
	@if(Request::is('/') || Request::is('about') || Request::is('contact') || Request::is('team'))
		@yield('content')
	@else
		<section id="allpages" class="full allpages">
			<div class="container somepages">
				<div class="wrapper-inside" style="padding-top: 50px">
					@include('includes.errors')
					@yield('content')
				</div>
			</div>
		</section>
	@endif
	<!-- end of conditioned -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="/css/animate/js/css3-animate-it.js"></script>
	@include('includes.footer')

</body>
</html>