<div class="visible-xs">
	<nav>
		<!--<div class="nav__item"><a href="{{ route('home') }}" class="brand"></a></div>-->
		<div class="nav__item">
			<div class="dropdown">
				<button type="button" class="navbar-toggle" data-toggle="dropdown">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('instruction') }}">Instruction</a></li>
					<li><a href="{{ route('youth-golf') }}">Youth Golf</a></li>
					<li><a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">Book Now</a></li>
					<li><a href="{{ route('contact') }}">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>

<div class="visible-sm visible-md visible-lg">
	<nav>
		<!--<div class="nav__section">
			<div class="nav__item"><a class="brand"></a></div>
		</div>-->
		<div class="nav__section">
			<div class="nav__item"><a href="{{ route('home') }}">Home</a></div>
			<div class="nav__item"><a href="{{ route('instruction') }}">Instruction</a></div>
			<!--<div class="nav__item"><a href="{{ route('home') }}" class="brand"></a></div>-->
			<div class="nav__item"><a href="{{ route('youth-golf') }}">Youth Golf</a></div>
			<div class="nav__item"><a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">Book Now</a></div>
			<div class="nav__item"><a href="{{ route('gca') }}">Golf Channel Academy</a></div>
			<div class="nav__item"><a href="{{ route('contact') }}">Contact</a></div>
		</div>
	</nav>
</div>