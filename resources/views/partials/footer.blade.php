<footer class="footer visible-xs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h4 class="footer__title">About Us</h4>

				<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit us today.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<h4 class="footer__title">Locations</h4>

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
			</div>

			<div class="col-xs-6">
				<h4 class="footer__title">Connect</h4>

				<div class="d-flex flex-direction-column">
					<a href="https://www.facebook.com/brianjacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-facebook-square fa-fw mr-2"></i>
						<small>Facebook</small>
					</a>
					<a href="https://twitter.com/BrianJacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-twitter fa-fw mr-2"></i>
						<small>Twitter</small>
					</a>
					<a href="http://instagram.com/BrianJacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-instagram fa-fw mr-2"></i>
						<small>Instagram</small>
					</a>
					<a href="{{ route('contact') }}" class="d-flex align-items-center">
						<i class="fa fa-paper-plane fa-fw mr-2"></i>
						<small>Contact Us</small>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<h4 class="footer__title">Main</h4>
				<ul class="list-unstyled">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('staff') }}">Staff</a></li>
					<li><a href="{{ route('events.index') }}">Events</a></li>
					<li><a href="{{ route('media.index') }}">Media</a></li>
					<li><a href="{{ route('partners') }}">Our Partners</a></li>
					<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
				</ul>
			</div>

			<div class="col-xs-6">
				<h4 class="footer__title">Learning</h4>
				<ul class="list-unstyled">
					<li><a href="{{ route('instruction') }}">Instruction</a></li>
					<li><a href="{{ route('youth-golf') }}">Youth Golf</a></li>
					<li><a href="{{ route('gca') }}">Golf Channel Academy</a></li>
					<li><a href="{{ route('trackman') }}">TrackMan</a></li>
					<li><a href="{{ route('book-now') }}">Book Now</a></li>
				</ul>
			</div>

			<div class="col-xs-12">
				<a href="{{ route('gca') }}" class="gca gca-sm"></a>
				<p class="copyright">&copy; {{ Carbon\Carbon::now()->format('Y') }} Brian Jacobs Golf
			</div>
		</div>
	</div>
</footer>

<footer class="footer visible-sm">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h4 class="footer__title">About</h4>

				<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit us today.</p>
			</div>

			<div class="col-sm-4">
				<h4 class="footer__title">Connect</h4>

				<div class="d-flex flex-direction-column">
					<a href="https://www.facebook.com/brianjacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-facebook-square fa-fw mr-2"></i>
						<small>Facebook</small>
					</a>
					<a href="https://twitter.com/BrianJacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-twitter fa-fw mr-2"></i>
						<small>Twitter</small>
					</a>
					<a href="http://instagram.com/BrianJacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-instagram fa-fw mr-2"></i>
						<small>Instagram</small>
					</a>
					<a href="{{ route('contact') }}" class="d-flex align-items-center">
						<i class="fa fa-paper-plane fa-fw mr-2"></i>
						<small>Contact Us</small>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<h4 class="footer__title">Locations</h4>

				<div class="row">
					<div class="col-md-6">
						<p>
							<strong>Ridgemont Country Club</strong><br>
							3717 Ridge Road West<br>
							Rochester, NY 14626
						</p>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Avid Indoor Golf &amp; Fitness</strong><br>
							3655 Ridge Road West<br>
							Rochester, NY 14626
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<h4 class="footer__title">Main</h4>
				<ul class="list-unstyled">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('staff') }}">Staff</a></li>
					<li><a href="{{ route('events.index') }}">Events</a></li>
					<li><a href="{{ route('media.index') }}">Media</a></li>
					<li><a href="{{ route('partners') }}">Our Partners</a></li>
					<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
				</ul>
			</div>

			<div class="col-sm-4">
				<h4 class="footer__title">Learning</h4>
				<ul class="list-unstyled">
					<li><a href="{{ route('instruction') }}">Instruction</a></li>
					<li><a href="{{ route('youth-golf') }}">Youth Golf</a></li>
					<li><a href="{{ route('gca') }}">Golf Channel Academy</a></li>
					<li><a href="{{ route('trackman') }}">TrackMan</a></li>
					<li><a href="{{ route('book-now') }}">Book Now</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<a href="{{ route('gca') }}" class="gca gca-sm"></a>
				<p class="copyright">&copy; {{ Carbon\Carbon::now()->format('Y') }} Brian Jacobs Golf
			</div>
		</div>
	</div>
</footer>

<footer class="footer visible-md visible-lg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h4 class="footer__title">About</h4>

				<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit us today.</p>
			</div>

			<div class="col-md-3">
				<div class="row">
					<div class="col-xs-6 col-md-12">
						<h4 class="footer__title">Main</h4>
						<ul class="list-unstyled">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('staff') }}">Staff</a></li>
							<li><a href="{{ route('events.index') }}">Events</a></li>
							<li><a href="{{ route('media.index') }}">Media</a></li>
							<li><a href="{{ route('partners') }}">Our Partners</a></li>
							<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="col-md-2">
				<h4 class="footer__title">Connect</h4>

				<div class="d-flex flex-direction-column">
					<a href="https://www.facebook.com/brianjacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-facebook-square fa-fw mr-2"></i>
						<small>Facebook</small>
					</a>
					<a href="https://twitter.com/BrianJacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-twitter fa-fw mr-2"></i>
						<small>Twitter</small>
					</a>
					<a href="http://instagram.com/BrianJacobsgolf"
					   target="_blank"
					   rel="noopener"
					   class="d-flex align-items-center mb-2">
						<i class="fab fa-instagram fa-fw mr-2"></i>
						<small>Instagram</small>
					</a>
					<a href="{{ route('contact') }}" class="d-flex align-items-center">
						<i class="fa fa-paper-plane fa-fw mr-2"></i>
						<small>Contact Us</small>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7">
				<h4 class="footer__title">Locations</h4>

				<div class="row">
					<div class="col-md-6">
						<p>
							<strong>Ridgemont Country Club</strong><br>
							3717 Ridge Road West<br>
							Rochester, NY 14626
						</p>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Avid Indoor Golf &amp; Fitness</strong><br>
							3655 Ridge Road West<br>
							Rochester, NY 14626
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<h4 class="footer__title">Learning</h4>
				<ul class="list-unstyled">
					<li><a href="{{ route('instruction') }}">Instruction</a></li>
					<li><a href="{{ route('youth-golf') }}">Youth Golf</a></li>
					<li><a href="{{ route('gca') }}">Golf Channel Academy</a></li>
					<li><a href="{{ route('trackman') }}">TrackMan</a></li>
					<li><a href="{{ route('book-now') }}">Book Now</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('gca') }}" class="gca gca-sm"></a>
				<p class="copyright">&copy; {{ Carbon\Carbon::now()->format('Y') }} Brian Jacobs Golf
			</div>
		</div>
	</div>
</footer>
