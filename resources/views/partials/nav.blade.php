<div class="visible-xs">
	<nav>
		<div class="nav__item">
			<a href="{{ route('home') }}">
				<img src="{{ asset('images/logo-oneline.svg') }}">
			</a>
		</div>
		{{-- <div class="nav__item">
			<div class="dropdown">
				<button type="button" class="navbar-toggle" data-toggle="dropdown">
					<i class="fal fa-bars fa-fw fa-2x"></i>
				</button>
				<ul class="dropdown-menu">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('instruction') }}">Instruction</a></li>
					<li><a href="{{ route('media.index') }}">Media</a></li>
					<li><a href="{{ route('youth-golf') }}">Youth Golf</a></li>
					<li><a href="{{ route('book-now') }}">Book Now</a></li>
					<li><a href="{{ route('contact') }}">Contact Us</a></li>
				</ul>
			</div>
		</div> --}}
	</nav>

	<div class="row">
		<div class="col-xs-12 mb-4">
			<a href="{{ route('book-now') }}" class="btn btn-primary btn-lg btn-block d-flex justify-content-around">
				<div class="d-flex align-items-center">
					<i class="far fa-calendar-alt fa-fw mr-2"></i>
					<span>Book Now</span>
				</div>
			</a>
		</div>
		<div class="col-xs-6 mb-4">
			<a href="{{ route('media.index') }}" class="btn btn-primary btn-lg btn-block d-flex justify-content-around">
				<div class="d-flex align-items-center">
					<i class="far fa-video fa-fw mr-2"></i>
					<span>Media</span>
				</div>
			</a>
		</div>
		<div class="col-xs-6 mb-4">
			<a href="{{ route('new-students') }}" class="btn btn-primary btn-lg btn-block d-flex justify-content-around">
				<div class="d-flex align-items-center">
					<i class="fa fa-users fa-fw mr-2"></i>
					<span>New Students</span>
				</div>
			</a>
		</div>
		<div class="col-xs-6">
			<a href="{{ route('instruction') }}" class="btn btn-primary btn-lg btn-block d-flex justify-content-around">
				<div class="d-flex align-items-center">
					<i class="fa fa-graduation-cap fa-fw mr-2"></i>
					<span>Instruction</span>
				</div>
			</a>
		</div>
		<div class="col-xs-6">
			<a href="{{ route('contact') }}" class="btn btn-primary btn-lg btn-block d-flex justify-content-around">
				<div class="d-flex align-items-center">
					<i class="fa fa-paper-plane fa-fw mr-2"></i>
					<span>Contact</span>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="visible-sm visible-md visible-lg">
	<nav>
		<div class="nav__section">
			<div class="nav__item"><a href="{{ route('home') }}">Home</a></div>
			<div class="nav__item"><a href="{{ route('instruction') }}">Instruction</a></div>
			<div class="nav__item"><a href="{{ route('media.index') }}">Media</a></div>
			<div class="nav__item"><a href="{{ route('book-now') }}">Book Now</a></div>
			<div class="nav__item"><a href="{{ route('gca') }}">Golf Channel Academy</a></div>
			<div class="nav__item"><a href="{{ route('contact') }}">Contact</a></div>
		</div>
	</nav>
</div>
