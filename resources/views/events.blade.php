@extends('layouts.page')

@section('title', 'Events')

@section('content')
	<section>
		<div class="container">
			<h1>Events</h1>

			<div class="event">
				<div class="event__image">
					<img src="{{ asset('images/DSC_4158 copy.jpg') }}">
				</div>
				<div class="event__block">
					<h3 class="event__title">90-for-90 Golf-Tastic</h3>
					<h4 class="event__subtitle">Fridays, 6:30pm - 8:00pm</h4>
					<h4 class="event__subtitle">Ridgemont Country Club</h4>

					<p>The 90 for 90 Golf-Tastic instructional series is designed to focus on 4 of the main areas to help golfers perform better on the course. Join us after work to learn what can be done to maximize your game, shoot lower scores, and have more fun!</p>

					<h3>$90 <small>per person per session</small></h3>

					<dl>
						<dt>WedgeTastic!</dt>
						<dd>June 30th</dd>
						<dd>Learn about all of the wedge shots you'll need on the course, make solid contact anywhere from greenside to 50 yards, master your control and trajectory, and shoot lower scores!</dd>

						<dt>DriveTastic!</dt>
						<dd>July 21st</dd>
						<dd>Cure that slice or hook forever, learn simple ways to ramp up your distance, and develop a plan and routine to keep your driver in play, all while having fun!</dd>

						<dt>PuttTastic!</dt>
						<dd>July 28th</dd>
						<dd>Learn the critical elements of tour quality putting, put a tour style roll on your golf ball, train and enhance your perception of green break, and make more putts!</dd>

						<dt>IronTastic!</dt>
						<dd>August 4th</dd>
						<dd>Learn to make more solid iron shots, take thin and fat shots out of the swing, limit the curve, develop an IronTastic routine, and play better golf!</dd>
					</dl>

					<div class="row">
						<div class="col-md-4">
							<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-primary btn-lg btn-block">Enroll Now</a>
						</div>
					</div>
				</div>
			</div>

			<div class="event reverse">
				<div class="event__image">
					<img src="{{ asset('images/IMG_0321.jpg') }}">
				</div>
				<div class="event__block">
					<h3 class="event__title">Tour Roll Putting Golf School</h3>
					<h4 class="event__subtitle">9:00am - 12:00pm</h4>
					<h4 class="event__subtitle"></h4>

					<p>This half-day putting school is designed for golfers of all skill levels and includes state-of-the-art coaching and support from a Golf Channel Academy Lead Instructor at one of our 20 Golf Channel Academy locations. We'll use Eyeline Golf training aids to assist you in improving your putting.</p>

					<ul>
						<li>3 total hours of instruction</li>
						<li>Full putting assessment and training</li>
						<li>Learn and train like a Tour professional</li>
						<li>3 Eyeline Golf training aids to use during the school and take home with you to practice with</li>
						<li>Guaranteed improvement!</li>
					</ul>

					<div class="row">
						<div class="col-md-4">
							<a role="button" class="btn btn-link btn-link-warning btn-lg btn-block disabled">Coming Soon</a>
						</div>
					</div>
				</div>
			</div>

			<div class="event">
				<div class="event__image">
					<img src="{{ asset('images/teaching4.jpg') }}">
				</div>
				<div class="event__block">
					<h3 class="event__title">Project 10/10</h3>

					<p class="lead">Start a New Tradition</p>

					<p>Finally! Take a major step with your golf game. Add consistency to your game with Golf Channel Academy at Brian Jacobs Golf.</p>

					<p>There are few great traditions in sports like the beginning of major season in golf. It leaves so many viewers with the passion to get back out to the course and play the game. Still, both casual and competitive golfers struggle to find their form when teeing it up after some time away from golf.</p>

					<p>At Brian Jacobs Golf, our goal is to give golfers the consistency they’ve always wanted and that includes you. Why not let some of the best instructors in the area help you create a new tradition – lower scores and consistent play.</p>

					<p>We are offering you a limited time opportunity to not only learn how to play and practice but also have supervised practice as you go!</p>

					<p>Purchase our 10/10 program for only $2,125.00 (that is a $500 savings) and you receive ten 60 minute coaching sessions and ten 30 minute supervised practice sessions.</p>

					<p class="lead"><strong>Decide. Commit. Succeed.</strong></p>

					<p class="text-muted text-sm">
						*Balance must be used within 6 months of start date<br>
						**Coaching and supervised practice may conjoin or be separated<br>
						***Full payment is expected at outset of program
					</p>

					<div class="row">
						<div class="col-md-5">
							<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-primary btn-lg btn-block">Enroll Now</a>
						</div>
					</div>
				</div>
			</div>

			<div class="event reverse">
				<div class="event__image">
					<img src="{{ asset('images/Camps - Putting.jpg') }}">
				</div>
				<div class="event__block">
					<h3 class="event__title">PGA Junior Golf Camps</h3>
					<h4 class="event__subtitle">Ridgemont Country Club</h4>

					<p>These golf camps follow a comprehensive junior golf curriculum developed specifically by the PGA of America. Camps are designed for boys and girls and emphasize skill development, including full swing, short game, rules and etiquette instruction, and fun by incorporating bothh off-course games and on-course play.</p>

					<ul>
						<li><strong>Full Day Camps (Ages 9-16) &ndash; $575</strong><br>
							June 26-30<br>
							July 17-21<br>
							July 31-August 4</li>
						<li><strong>Half Day Camps (Ages 7-13) &ndash; $325</strong><br>
							June 26-30<br>
							July 17-21<br>
							July 31-August 4</li>
					</ul>

					<p>Save 10% on any Summer 2017 camp by using the code <strong>GOLF2017</strong> at checkout. <strong><em>But be sure to act fast, as this offer expires March 13th, 2017!</em></strong></p>

					<div class="row">
						<div class="col-md-5">
							<a href="http://pgajuniorgolfcamps.com" target="_blank" class="btn btn-primary btn-lg btn-block">Enroll Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection