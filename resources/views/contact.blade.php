@extends('layouts.page')

@section('title', 'Contact Us')

@section('content')
	<section>
		<div class="container">
			<h1>Contact Us</h1>

			<div class="row">
				<div class="col-md-7">
					<h3>Send Us a Message</h3>

					@if (session()->has('flash'))
						<div class="alert alert-success">
							{{ session('flash') }}
						</div>
					@endif

					<form method="POST" action="{{ route('contact.send') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					        <input type="text" class="form-control input-lg" value="" name="name" placeholder="Your Name">
							{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
					    </div>

					    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					        <input type="email" class="form-control input-lg" value="" name="email" placeholder="Your Email Address">
							{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
					    </div>

					    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
					        <textarea class="form-control input-lg" value="" name="body" placeholder="Your Message" rows="8"></textarea>
							{!! $errors->first('body', '<p class="help-block">:message</p>') !!}
					    </div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg">Send Your Message</button>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<h3>Contact Information</h3>

					<p><i class="fa fa-phone fa-fw"></i> 585-415-9323</p>

					<p>
						<strong>Ridgemont Country Club</strong><br>
						3717 Ridge Road West<br>
						Rochester, NY 14626
					</p>

					<p>
						<strong>Avid Indoor Golf &amp; Fitness</strong><br>
						3655 Ridge Road West<br>
						Rochester, NY 14626
					</p>

					<p>
						<a href="https://www.facebook.com/brianjacobsgolf" target="_blank"><i class="fa fa-facebook-official fa-fw fa-2x"></i></a>
						&nbsp;
						<a href="https://twitter.com/BrianJacobsgolf" target="_blank"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
						&nbsp;
						<a href="http://instagram.com/BrianJacobsgolf" target="_blank"><i class="fa fa-instagram fa-fw fa-2x"></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
@endsection