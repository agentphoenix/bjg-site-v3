@extends('layouts.page')

@section('title', 'TrackMan')

@section('content')
	<section>
		<div class="container">
			<div class="event reverse centered">
				<div class="event__image no-decoration">
					<img src="{{ asset('images/TM3_Side.png') }}">
				</div>
				<div class="event__block">
					<h1>TrackMan</h1>

					<p class="lead">Why guess when you can know?</p>

					<p>Golf practice and player development are going through a period of tremendous change and technology is a central component in that transformation. The mapping of swing DNA is now possible, as is the quantification and comparison of swing feel vs. real. Technology also empowers us to monitor granular swing changes over time. These are just a few, compelling examples of how to unleash talent more effectively.</p>

					<p>With TrackMan, we have all those tools to jump ahead. From groundbreaking club and ball tracking golf radar systems to the best performance enhancing software available in the industry today.</p>
				</div>
			</div>

			<h2>TrackMan Services</h2>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title">TrackMan Combine</h3>
						<p class="card__text">Includes: range warm up, 60 shot test results, instruction, and email report.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$199</h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" rel="noopener" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">TrackMan Wedge Combine</h3>
						<p class="card__text">Personalized TrackMan test to identify your strengths and weaknesses.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$175</h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" rel="noopener" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">TrackMan Club Gapping</h3>
						<p class="card__text">Find out how far you <em>really</em> hit each of your clubs. Receive a report detailing your carry distance with each club.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$175</h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" rel="noopener" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>
			</div>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title">Equipment Evaluation</h3>
						<p class="card__text">Using TrackMan, we'll ensure you're using the right equipment for your game.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$199</h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" rel="noopener" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">TrackMan Corporate Event</h3>
						<p class="card__text">Have the TrackMan set up on a hole during your event. Each player will have their TrackMan video of their swing emailed to them.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$500</h3>
						<a href="#" class="btn btn-link btn-block">Contact Us to Book</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection