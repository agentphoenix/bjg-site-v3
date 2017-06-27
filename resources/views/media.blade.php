@extends('layouts.page')

@section('title', 'Media')

@section('content')
	<section>
		<div class="container">
			<h1>Media</h1>

			<video :src="media.file"
				   controls
				   controlsList="nodownload"
				   v-show="media != false"></video>

			<div class="caption" v-show="media != false">
				<h3>@{{ media.title }}</h3>
				<p class="text-muted"><small>@{{ media.summary }}</small></p>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4" v-for="video in videos">
					<div class="thumbnail">
						<a href="#" @click.prevent="changeMedia(video)">
							<img :src="video.preview" :alt="video.title">
						</a>
						<div class="caption">
							<h4>@{{ video.title }}</h4>
							<p v-text="video.summary"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('js')
	<script>
		var vue = new Vue({
			el: "#app",

			data: {
				media: false,
				videos: {!! $fileList !!}
			},

			methods: {
				changeMedia (media) {
					this.media = media

					window.scrollTo(0, 0)
				}
			}
		})
	</script>
@endsection