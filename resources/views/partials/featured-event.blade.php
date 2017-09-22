@php($reversed = ($loop->index % 2 == 1))

<div class="event{{ $reversed ? ' reverse' : '' }}">
	<div class="event__image">
		<img src="{{ asset("images/{$event['images']['full']}") }}">
	</div>
	<div class="event__block">
		<h3 class="event__title">{{ $event['name'] }}</h3>

		@if (! empty($event['schedule']))
			<h4 class="event__subtitle">{{ $event['schedule'] }}</h4>
		@endif

		@if (! empty($event['location']))
			<h4 class="event__subtitle">{{ $event['location'] }}</h4>
		@endif

		<p>{{ $event['summary'] }}</p>

		@if (! empty($event['pricing']))
			<h3>{!! $event['pricing'] !!}</h3>
		@endif

		<div class="btn-toolbar">
			@if (! empty($event['links']['infoButtonLink']))
				<div class="btn-group">
					<a href="{{ $event['links']['infoButtonLink'] }}" class="btn btn-default">
						{{ $event['links']['infoButtonText'] }}
					</a>
				</div>
			@endif

			@if (! empty($event['links']['bookingButtonLink']))
				<div class="btn-group">
					<a href="{{ $event['links']['bookingButtonLink'] }}" class="btn btn-primary">
						{{ $event['links']['bookingButtonText'] }}
					</a>
				</div>
			@endif
		</div>
	</div>
</div>