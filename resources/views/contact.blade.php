@extends('layouts.page')

@section('title', 'Contact Us')

@section('content')
	<section>
		<div class="container">
			<h1>Contact Us</h1>

			<div class="row">
				<div class="col-md-7">
					<h3>Send Us a Message</h3>
					<div class="confirm-container"> <!--This will contain the confirmation when the email is successfully sent--> </div>


						<div class="form-groups">
						    <div class="form-group">
						        <input type="text" class="form-control input-lg" value="" name="name" placeholder="Your Name">
						    </div>

						    <div class="form-group">
						        <input type="text" class="form-control input-lg" value="" name="email" placeholder="Your Email Address">
						    </div>

						    <div class="form-group">
						        <textarea class="form-control input-lg" value="" name="body" placeholder="Your Message" rows="8"></textarea>
						    </div>

							<div class="form-group">
								<input type="hidden" name="subject" value="">
								<button type="submit" class="btn btn-primary btn-lg disabled">Send Your Message</button>
							</div>
						</div>

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