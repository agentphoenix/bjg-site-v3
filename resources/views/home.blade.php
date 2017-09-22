@extends('layouts.home')

@section('title', 'Home')

@section('content')
	<section class="staff-brian-alt">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section__content">
						<h2>Meet the Staff</h2>

						<p>At Brian Jacobs Golf, we're committed to putting the best instructors in front of our students. The relationships we develop are the most important part of what we do. To that end, we've brought together instructors that are highly respected within the industry, have an intense passion about the game of golf, and the drive to help our students succeed both on and off the course.</p>

						<a href="{{ route('staff') }}" class="btn btn-primary btn-lg">Meet the Staff</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="events">
		<div class="container">
			<div class="d-flex align-items-center justify-content-between flex-direction-column-xs">
				<h2>Featured Events</h2>

				<a href="{{ route('events.index') }}" class="btn btn-primary btn-lg">
					See All Events
				</a>
			</div>

			@foreach ($events as $event)
				@include('partials.featured-event', compact('event', 'loop'))
			@endforeach
		</div>
	</section>
@endsection