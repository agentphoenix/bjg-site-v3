@extends('layouts.page')

@section('title', 'Photos')

@section('content')
	<section>
		<div class="container">
			<h1>Photos</h1>

			<div class="btn-toolbar mb-4">
				<div class="btn-group">
					<a href="{{ route('media.index') }}" class="btn btn-default"><i class="fa fa-arrow-circle-left fa-fw fa-2x"></i></a>
				</div>
				<div class="btn-group">
					<a href="http://instagram.com/BrianJacobsgolf" target="_blank" class="btn btn-default"><i class="fa fa-instagram fa-fw fa-2x"></i></a>
				</div>
			</div>

			<div class="row">
				@foreach ($media as $m)
					<div class="col-sm-6">
						<div class="thumbnail">
							<img src="{{ $m->images->standard_resolution->url }}">

							{{-- <div class="caption">
								<small>{{ $m->caption->text }}</small>
							</div> --}}
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection