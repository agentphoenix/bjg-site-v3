@extends('layouts.page')

@section('title', 'Events')

@section('content')
	<section>
		<div class="container">
			<h1>Events</h1>

			<div class="event">
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

			<div class="event reverse">
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

			<div class="event">
				<div class="event__image">
					<img src="{{ asset('images/DSC_4158 copy.jpg') }}">
				</div>
				<div class="event__block">
					<h3 class="event__title">Game Improvement Practice Program</h3>
					<h4 class="event__subtitle">Tuesdays, 6:15pm - 7:30pm</h4>
					<h4 class="event__subtitle">May 2nd - August 29th</h4>

					<p>No matter what your skill level who doesn't need game improvement?</p>

					<p>The Game Improvement Practice Program is designed to assist you with your golf game in a group, fun format. Each week we will have a specific area of the game of golf to learn, practice, and improve in! Each session begins with a brief clinic by PGA and Golf Channel Lead Instructor Brian Jacobs to get you focused and ready to practice!</p>

					<p>All that is required is a one month commitment (we know you'll want to do more) and a positive attitude; all this for the low price of $125 per month per participant.</p>

					<p>The program is open to RCC Members and Non-Members and is tailored for any level of player! Space is limited (If we overflow we will add more instructors) so call 585-415-9323 to reserve your spot today!</p>

					<div class="row">
						<div class="col-md-4">
							<a href="{{ route('contact') }}" class="btn btn-primary btn-lg btn-block">Enroll Today</a>
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