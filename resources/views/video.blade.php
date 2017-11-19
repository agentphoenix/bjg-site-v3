@extends('layouts.page')

@section('title', 'Videos')

@section('content')
	<section>
		<div class="container">
			<h1>Videos</h1>

			<div class="btn-toolbar mb-4">
				<div class="btn-group">
					<a href="{{ route('media.videos') }}" class="btn btn-default"><i class="fa fa-arrow-alt-circle-left fa-fw fa-2x"></i></a>
				</div>
			</div>

			<video src="{{ $video['file'] }}" controls controlsList="nodownload"></video>

			<div class="caption">
				<h3>{{ $video['title'] }}</h3>
				<p class="text-muted"><small>{{ $video['summary'] }}</small></p>
			</div>
		</div>
	</section>
@endsection