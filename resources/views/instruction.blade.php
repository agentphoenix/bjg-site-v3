@extends('layouts.page')

@section('title', 'Instruction')

@section('content')
	<section>
		<div class="container">
			<h1>Instruction</h1>

			<p>We have two very simple goals: make instruction a positive experience and ensure students leave better than when they arrived. We work tirelessly to make our time together informative and fun. At Brian Jacobs Golf, there's no "one size fits all" approach; it's entirely about you. Knowing and understanding your golf swing is our passion and our promise.</p>
		</div>
	</section>

	<section class="instruction-philosophy">
	    <div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="section__content">
						<h2>Foster a Relationship</h2>
						<p>We want to have a relationship with our students. What happens off the course very often impacts what happens on the course. We want to understand who our students are as people and athletes, how they learn best, and what their goals for golf and life are.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="section__content">
						<h2>Develop a Custom Plan</h2>
						<p>When we know our students and what their goals are, we can develop a <em>tailored plan</em> for improvement and success. We don't give lessons, we provide <em>coaching</em>. We want to identify areas of improvement and continually work together toward those goals.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="section__content">
						<h2>Reinforce Instruction</h2>
						<p>Anyone can stand on a range and hit good shots, but can you hit those same shots when you're on the course? We believe in taking our instruction off the range and onto the course as much as possible to reinforce what we're teaching students.</p>
					</div>
				</div>
			</div>
	    </div>
	</section>

	<section>
		<div class="container">
			<!--<h2>What Makes Our Instruction Different?</h2>

			<div class="row">
				<div class="col-md-4">
					<h4>Hands-On Approach</h4>
					<p>We believe the best way to learn is by being <em>moved</em> into the correct positions. This helps our students develop a lasting, repeatable swing.</p>
				</div>

				<div class="col-md-4">
					<h4>Short Game Focus</h4>
					<p>50% of the game happens inside 150 yards, so we stress the importance of pitching, chipping, and putting as a way to improve scores.</p>
				</div>

				<div class="col-md-4">
					<h4>On-Course Learning</h4>
					<p>It's critical to learn under the conditions in which you'll play. To that end, we strive to teach students on the course as much as possible.</p>
				</div>
			</div>-->

			<h2>Performance Coaching</h2>

			<div class="callouts callouts__cascade">
				<div class="callout__item left">
					<div class="callout__block">
						<div class="callout__content">
							<h3 class="callout__title">Elite</h3>
							<ul>
								<li>4 60-minute private lessons per month (once a week)</li>
								<li>1 year subscription to Shot-By-Shot round analysis</li>
							</ul>
						</div>
						<div class="callout__footer">
							<h3 class="text-center">$500 <small>per month</small></h3>
							<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-default btn-lg btn-block">Book Now</a>
						</div>
					</div>
				</div>

				<div class="callout__item center highlight">
					<div class="callout__block">
						<div class="callout__content">
							<h3 class="callout__title">Premium</h3>
							<ul>
								<li>2 60-minute private lessons per month (every other week)</li>
								<li>3 month commitment available for $350 per month</li>
								<li>6 month commitment available for $340 per month</li>
								<li>Shot-By-Shot round analysis subscription available for additional cost and <em>highly recommended</em></li>
							</ul>
						</div>
						<div class="callout__footer">
							<h3 class="text-center">$330 <small>per month (12 months)</small></h3>
							<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-primary btn-lg btn-block">Book Now</a>
						</div>
					</div>
				</div>

				<div class="callout__item right">
					<div class="callout__block">
						<div class="callout__content">
							<h3 class="callout__title">Golf Channel Academy Club</h3>
							<ul>
								<li>Schedule as many lessons as you want per month</li>
								<li>12 month commitment required</li>
								<li>Shot-By-Shot round analysis subscription available for additional cost</li>
							</ul>
						</div>
						<div class="callout__footer">
							<div class="row">
								<div class="col-md-6">
									<h3 class="text-center">$100 <small>per month</small></h3>
								</div>
								<div class="col-md-6">
									<h3 class="text-center">$95 <small>per lesson</small></h3>
								</div>
							</div>
							<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-default btn-lg btn-block">Book Now</a>
						</div>
					</div>
				</div>
			</div>

			<p class="text-muted"><em>*All Performance Coaching series come with a 1 year subscription to the Golf Channel Academy digital magazine as well as discounts on premier equipment and soft goods.</em></p>

			<h2>Other Services</h2>

			<p>We offer a wide range of additional services including private lessons, on-course playing lessons, equipment evaluations, group clinics, Golf Channel Academy Golf Schools, and many <a href="{{ route('trackman') }}">TrackMan</a> swing and ball flight analysis services. <a href="{{ route('contact') }}">Contact us</a> for more information or <a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">book today</a>!</p>

			<!--<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title">Private Lesson</h3>
						<p class="card__text">Spend an hour with one of our instructors in a productive one-on-one setting.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$175 <small>per hour</small></h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">Playing Lesson</h3>
						<p class="card__text">Apply what you've learned out on the course with on-course time with an instructor.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$350 <small>9 holes</small></h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">Equipment Evaluation</h3>
						<p class="card__text">Using TrackMan, we'll ensure you're using the right equipment for your game.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$199 <small>per session</small></h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">TrackMan Combine</h3>
						<p class="card__text">Test your skills to learn your strengths and identify your weaknesses.</p>
					</div>
					<div class="card__footer">
						<h3 class="text-center">$199 <small>per session</small></h3>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-link btn-block">Book Now</a>
					</div>
				</div>
			</div>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title">New Student Assessment</h3>

						<p class="card__text">For students new to Brian Jacobs Golf, our New Student Assessment is an opportunity for you to meet and interact with one of our instructors to see if we're a good fit for you. During the 1-hour session, you'll get to know your coach as they observe all aspects of your game.</p>
					</div>
					<div class="card__footer">
						<a href="{{ route('new-students') }}">Learn More</a>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">TrackMan Services</h3>

						<p class="card__text">We utilize the industry-leading swing and ball flight analysis hardware TrackMan in many of the services we offer. This is a tool that helps us teach better and smarter. Why guess when you can know?</p>
					</div>
					<div class="card__footer">
						<a href="{{ route('trackman') }}">Learn More</a>
					</div>
				</div>
			</div>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title">Group Clinics</h3>

						<p class="card__text">We teach either one-on-one or two-on-one golf schools because we believe this personalized attention creates more rapid progress, greater learning retention and allows us to customize a program for your individual needs based on our comprehensive assessments.</p>
					</div>
					<div class="card__footer">
						<a href="#">Learn More</a>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card__block">
						<h3 class="card__title">The Tour Experience</h3>

						<p class="card__text">This one-on-one one-day golf school gives you the true experience of being coached in a "Tour Environment" and can be arranged to fit your schedule. In addition to a full day of coaching, you'll also receive several gifts as a thank you for choosing the Brian Jacobs Golf Tour Experience.</p>
					</div>
					<div class="card__footer">
						<a href="#">Learn More</a>
						<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">Book Now</a>
					</div>
				</div>
			</div>-->
		</div>
	</section>
@endsection