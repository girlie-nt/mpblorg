@extends('layouts.app')


@section('content')
<div class="col-md-4" style="margin-top: 50px;">
	@include('includes.sidebar')
</div>
<div class="col-md-8">
	<?php var_dump($data); ?>
	<div class="videos">
		<!-- @foreach()

		@endforeach -->
	</div>
</div>
@endsection