@extends('layouts.page')

@section('title', 'Media Room')

@section('content')
	<section>
		<div class="container">
			<h1>Media Room</h1>

			<div class="row">
				<div class="col-sm-6">
					<a href="{{ route('media.photos') }}" class="thumbnail align-center">
						<i class="fa fa-picture-o fa-fw fa-5x text-subtle"></i>
						<h3 class="mb-0">Photos</h3>
					</a>
				</div>

				<div class="col-sm-6">
					<a href="{{ route('media.videos') }}" class="thumbnail align-center">
						<i class="fa fa-video-camera fa-fw fa-5x text-subtle"></i>
						<h3 class="mb-0">Videos</h3>
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection