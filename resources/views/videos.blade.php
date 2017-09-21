@extends('layouts.page')

@section('title', 'Videos')

@section('content')
	<section v-cloak>
		<div class="container">
			<h1>Videos</h1>

			<div class="btn-toolbar mb-4">
				<div class="btn-group">
					<a href="{{ route('media.index') }}" class="btn btn-default"><i class="fa fa-arrow-alt-circle-left fa-fw fa-2x"></i></a>
				</div>
			</div>

			<video :src="media.file"
				   controls
				   controlsList="nodownload"
				   v-show="media != false"></video>

			<div class="caption" v-show="media != false">
				<h3>@{{ media.title }}</h3>
				<p class="text-muted"><small>@{{ media.summary }}</small></p>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-sm-6" v-for="video in filteredVideos">
							<div class="thumbnail">
								<a href="#" @click.prevent="changeMedia(video)">
									<img :src="video.preview" :alt="video.title">
								</a>
								<div class="caption">
									<h4>@{{ video.title }}</h4>
									{{-- <p v-text="video.summary"></p> --}}
									<a class="label label-default mr-2"
									   v-for="category in video.categories"
									   @click.prevent="searchCategories = category">
										@{{ category }}
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title d-flex align-items-center">
								<i class="far fa-search fa-fw mr-2"></i>
								Find Videos
							</h3>
						</div>
						<div class="panel-body">
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Drill"
										   v-model="searchCategories">
									Drill
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Tip"
										   v-model="searchCategories">
									Tip
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Driver"
										   v-model="searchCategories">
									Driver
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Hybrids"
										   v-model="searchCategories">
									Hybrids
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Irons"
										   v-model="searchCategories">
									Irons
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Putting"
										   v-model="searchCategories">
									Putting
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio"
										   name="searchCategories"
										   value="Training"
										   v-model="searchCategories">
									Putting
								</label>
							</div>
						</div>

						<div class="panel-footer">
							<button type="button" class="btn btn-default btn-block" @click.prevent="searchCategories = ''">Show All Videos</button>
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
				searchCategories: '',
				videos: {!! $fileList !!}
			},

			computed: {
				filteredVideos () {
					let self = this

					return this.videos.filter(function (video) {
						let regex = new RegExp(self.searchCategories, 'i')

						return regex.test(video.categories)
					})
				}
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