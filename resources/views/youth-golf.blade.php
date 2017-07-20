@extends('layouts.page')

@section('title', 'Youth Golf')

@section('content')
	<section>
		<div class="container">
			<h1>Youth Golf</h1>

			<p>At Brian Jacobs Golf, our experience has taught us that children learn best in social settings with like-minded participants. We believe that competition, administered correctly, is healthy for a child and learning how to compete will serve them well not only in golf, but in life. We exclusively teach within this philosophy and many of our students have evolved into champions at not only the junior golf and collegiate levels, but also in the classroom and their communities.</p>

			<p>During each semester of the Youth Program we cover the rules, etiquette, and history of golf as well as nutrition, fitness, sport psychology, how to compete, and much more.</p>

			<h2>Details</h2>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title"><i class="fa fa-calendar fa-3x text-subtle"></i></h3>
						<p class="card__text">There will be two semesters (running approximately 20 weeks each) through the year with a break between each semester. The winter semester runs from November until March. The spring/summer semester runs from May until October.</p>
					</div>
				</div>
				<div class="card">
					<div class="card__block">
						<h3 class="card__title"><i class="fa fa-users fa-3x text-subtle"></i></h3>
						<p class="card__text">The goal will be to operate 4 groups of up to 12 students per group. We intentionally keep these groups smaller to provide more one-on- one time with instructors. Space is limited, so make sure to enroll early!</p>
					</div>
				</div>
			</div>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<h3 class="card__title"><i class="fa fa-dot-circle-o fa-3x text-subtle"></i></h3>
						<p class="card__text">Every month of the semester there will be a skills challenge to test students and allow them to achieve personal bests. Scores from these skills challenge will allow students to progress to a higher group.</p>
					</div>
				</div>
				<div class="card">
					<div class="card__block">
						<h3 class="card__title"><i class="fa fa-graduation-cap fa-3x text-subtle"></i></h3>
						<p class="card__text">We will bring in experts in various fields such as sport psychology, nutrition for athletes, physical therapy, exercise physiology, and more to present and work with students.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="instruction-philosophy">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section__content">
						<h2>Champs Group <small>5-7 years old</small></h2>
						<ul class="list-unstyled">
							<li>Saturdays 10:30a-11:30a</li>
						</ul>

						<h3 class="text-center">$1,199 <small>per semester</small></h3>
					</div>
				</div>

				<div class="col-md-6">
					<div class="section__content">
						<h2>Futures Group <small>8-10 years old</small></h2>
						<ul class="list-unstyled">
							<li>Saturdays 9:15a-10:15a</li>
						</ul>

						<h3 class="text-center">$1,199 <small>per semester</small></h3>
					</div>
				</div>

				<div class="col-md-6">
					<div class="section__content">
						<h2>Tour Group <small>11-13 years old</small></h2>
						<ul class="list-unstyled">
							<li>Mondays 5:00p-6:30p</li>
							<li>Fridays 5:00p-6:30p</li>
						</ul>

						<h3 class="text-center">$1,595 <small>per semester</small></h3>
					</div>
				</div>

				<div class="col-md-6">
					<div class="section__content">
						<h2>Elite Group <small>14-17 years old</small></h2>
						<ul class="list-unstyled">
							<li>Tuesdays 4:00p-5:30p</li>
							<li>Thursdays 4:00p-5:30p</li>
						</ul>

						<h3 class="text-center">$1,595 <small>per semester</small></h3>
					</div>
				</div>
			</div>
	    </div>
	</section>

	<section>
		<div class="container">
			<h2>Youth Golf Association</h2>

			<p>For students who are looking for a more exclusive interaction with a Brian Jacobs Golf instructor, we offer a limited availability Youth Golf Association. This association provides students with 1-on-1 time with an instructor on a consistent basis throughout the year. If you're interested in this program, please <a href="{{ route( 'contact') }}">contact us</a> for more information.</p>

			<div class="cards">
				<div class="card">
					<div class="card__block">
						<p class="card__text text-center lead">5 coaching sessions per month<sup>1</sup></p>
					</div>
				</div>
				<div class="card">
					<div class="card__block">
						<p class="card__text text-center lead">All coaching sessions are private<sup>2</sup></p>
					</div>
				</div>
				<div class="card">
					<div class="card__block">
						<p class="card__text text-center lead">$50 Association Fee + $199 per month<sup>3</sup></p>
					</div>
				</div>
			</div>

			<p class="text-muted"><em><sup>1</sup>Outdoor season only. Indoor season is 2 sessions per month.</em></p>
			<p class="text-muted"><em><sup>2</sup>Unless students request to work with an instructor together.</em></p>
			<p class="text-muted"><em><sup>3</sup>All payments will be made via Brian Jacobs Golf payment gateway so a credit card can be kept on file. Each monthly payment will be deducted on the 1st of each month. Family discount available for families with more than 1 student in the program.</em></p>
		</div>
	</section>
@endsection