<div class="container">
	@if(Request::is('/'))
	@include('includes.showcase')
	@endif
	<div class="row">
		<div class="col-md-8 col-lg-8">
			@include('includes.errors')
			@yield('content')
		</div>
		<div class="col-md-4 col-lg-4">
			@include('includes.sidebar')
		</div>
	</div>
</div>