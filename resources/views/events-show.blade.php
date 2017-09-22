@extends('layouts.page')

@section('title', $ev['name'].' &bull; Events')

@section('content')
	<section>
		<div class="container">
			<div class="event reverse centered">
				<div class="event__image md">
					<img src="{{ asset("images/{$ev['images']['full']}") }}">
				</div>
				<div class="event__block">
					<h1>{{ $ev['name'] }}</h1>

					<p>{{ $ev['summary'] }}</p>

					<h3>{!! $ev['pricing'] !!}</h3>

					<div class="btn-toolbar">
						@if (! empty($ev['links']['bookingButtonLink']))
							<div class="btn-group">
								<a href="{{ $ev['links']['bookingButtonLink'] }}" class="btn btn-primary btn-lg">
									{{ $ev['links']['bookingButtonText'] }}
								</a>
							</div>
						@endif
					</div>
				</div>
			</div>

			<h2>Details</h2>

			<p>{!! $ev['details'] !!}</p>
		</div>
	</section>
@endsection