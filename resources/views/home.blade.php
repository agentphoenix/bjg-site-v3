@extends('layouts.home')

@section('title', 'Home')

@section('content')
	<section class="staff-brian-alt">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section__content">
						<h2>Meet the Staff</h2>

						<p>At Brian Jacobs Golf, we're committed to putting the best instructors in front of our students. The relationships we develop are the most important part of what we do. To that end, we've brought together instructors that are highly respected within the industry, have an intense passion about the game of golf, and the drive to help our students succeed both on and off the course.</p>

						<a href="{{ route('staff') }}" class="btn btn-primary btn-lg">Meet the Staff</a>

						{{-- <p>Over the last 15 years, Brian Jacobs has worked to empower golfers of all ages to find greater enjoyment from the game he loves so much. His dedication and passion for the game are infectious and have earned him Class A PGA credentials and recognition from the PGA Foundation for helping grow the game of golf.</p>

						<p>Drawing from his unique experience as an accomplished player, caddie, PGA Professional and golf instructor, Brian brings an invaluable "inside the ropes" perspective to his teaching. Whether you're looking for swing instruction, short game help, course management skills, learning how to manage yourself within a round of golf or preparing your youth golfer to play the game at a high level, Brian has the expertise to help you succeed.</p> --}}
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="events">
		<div class="container">
			<h2>
				<div class="pull-right visible-md visible-lg">
					<a href="{{ route('events.all') }}" class="btn btn-block btn-primary btn-lg">See All Events</a>
				</div>

				Featured Events
			</h2>

			<p class="visible-xs visible-sm"><a href="{{ route('events.all') }}" class="btn btn-block btn-primary btn-lg">See All Events</a></p>

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