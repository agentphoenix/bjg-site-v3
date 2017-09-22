@extends('layouts.page')

@section('title', 'Events')

@section('content')
	<section>
		<div class="container">
			<h1>Events</h1>

			@foreach ($events as $event)
				@include('partials.featured-event', compact('event', 'loop'))
			@endforeach
		</div>
	</section>
@endsection