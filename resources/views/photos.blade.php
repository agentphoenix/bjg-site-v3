@extends('layouts.page')

@section('title', 'Photos')

@section('content')
	<section>
		<div class="container">
			<h1>Photos</h1>

			<div class="btn-toolbar">
				<div class="btn-group">
					<a href="{{ route('media.index') }}" class="btn btn-default"><i class="fa fa-arrow-circle-left fa-fw fa-2x"></i></a>
				</div>
				<div class="btn-group">
					<a href="http://instagram.com/BrianJacobsgolf" target="_blank" class="btn btn-default"><i class="fab fa-instagram fa-fw fa-2x"></i></a>
				</div>
			</div>

			@foreach ($media as $m)
				<div class="event {{ ($loop->index % 2 == 1) ? 'reverse' : '' }}">
					<div class="event__image">
						@if ($m->type == 'image')
							<img src="{{ $m->images->standard_resolution->url }}">
						@endif

						@if ($m->type == 'video')
							<video src="{{ $m->videos->standard_resolution->url }}"
								   controls
								   controlsList="nodownload"></video>
						@endif
					</div>
					<div class="event__block">
						<p class="lead">{{ $m->caption->text }}</p>

						<small class="d-flex align-items-center">
							<i class="fa fa-heart fa-fw mr-1 text-liked"></i>
							<span class="text-subtle mr-4">{{ $m->likes->count }}</span>

							@if ($m->comments->count > 0)
								<i class="fa fa-comment fa-fw mr-1 text-subtle"></i>
								<span class="text-subtle mr-4">{{ $m->comments->count }}</span>
							@endif

							<i class="fa fa-clock fa-fw mr-1 text-subtle"></i>
							<span class="text-subtle mr-4">{{ Date::createFromTimestamp($m->created_time)->diffForHumans() }}</span>

							<a href="{{ $m->link }}" target="_blank" class="btn btn-sm btn-default">More Info</a>
						</small>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection