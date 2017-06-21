@extends('layouts.page')

@section('title', 'Staff')

@section('content')
	<section>
		<div class="container">
			<h1>Staff</h1>

			<p>At Brian Jacobs Golf, we're committed to putting the best instructors in front of our students. The relationships we develop are the most important part of what we do. To that end, we've brought together instructors that are highly respected within the industry, have an intense passion about the game of golf, and the drive to help our students succeed both on and off the course.</p>
		</div>
	</section>

	<section class="staff-brian">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section__content">
						<h2>Brian Jacobs <small>Lead Instructor</small></h2>

						<p>Over the last 15 years, Brian Jacobs has worked to empower golfers of all ages to find greater enjoyment from the game he loves so much. His dedication and passion for the game are infectious and have earned him Class A PGA credentials and recognition from the PGA Foundation for helping grow the game of golf. Brian possess an MS Ed in addition to PGA Class A credentials and is a Lead Instructor for Golf Channel Academy. He is a frequent Coach of the Week for Golf Channel and got his training leading golf schools for ESPN Golf Schools.</p>

						<p>Drawing from his unique experience as an accomplished player, caddie, PGA Professional, and golf instructor, Brian brings an invaluable "inside the ropes" perspective to his teaching. Whether you're looking for swing instruction, short game help, course management skills, learning how to manage yourself within a round of golf or preparing your youth golfer to play the game at a high level, Brian has the expertise to help you succeed.</p>

						<a href="https://twitter.com/BrianJacobsgolf" target="_blank" class="btn btn-default btn-circle"><i class="fa fa-fw fa-twitter"></i></a>
						&nbsp;
						<a href="http://instagram.com/BrianJacobsgolf" target="_blank" class="btn btn-default btn-circle"><i class="fa fa-fw fa-instagram"></i></a>
						&nbsp;
						<a href="https://www.facebook.com/brianjacobsgolf" target="_blank" class="btn btn-default btn-circle"><i class="fa fa-fw fa-facebook-official"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactBrian"><i class="fa fa-fw fa-paper-plane"></i></a>

						{{-- <p>Drawing from his unique experience as an accomplished player, caddie, PGA Professional and golf instructor, Brian brings an invaluable "inside the ropes" perspective to his teaching. Whether you're looking for swing instruction, short game help, course management skills, learning how to manage yourself within a round of golf or preparing your youth golfer to play the game at a high level, Brian has the expertise to help you succeed.</p> --}}
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="staff-rob">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section__content">
						<h2>Rob Comerer <small>Staff Instructor</small></h2>

						<p>Rob is a Class-A PGA Professional and Staff Instructor at Brian Jacobs Golf who has worked and taught at some of the country’s finest clubs, including: the Bucknell Golf Club, Ford’s Colony Country Club, Wilmington Country Club, and most recently, the Baltimore Country Club.</p>

						<p>Rob graduated from Penn State University with a Bachelor of Science Degree in Health and Human Development with PGA Golf Management as his focus. He's had the opportunity to study under some of the most respected individuals in the business. He focuses on analyzing, diagnosing, and fixing flaws in students’ games and has received numerous certifications including Trackman, Swing Catalyst, Eyeline Golf 4PE, Positive Coaching, and US Kids Golf. Rob has also been awarded the US Kids Golf Top 50 Honorable Mention Award.</p>

						<a href="https://twitter.com/RobComererPGA" target="_blank" class="btn btn-default btn-circle"><i class="fa fa-fw fa-twitter"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#ratesRob"><i class="fa fa-fw fa-usd"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactRob"><i class="fa fa-fw fa-paper-plane"></i></a>

						{{-- <h3>In His Own Words...</h3>

						<blockquote>
							“I do not subscribe to one specific methodology of teaching.  I do believe in science and technology, and the use of this in varying hands-on ways to help my student’s progress towards their goals.  At Brian Jacobs Golf and the Golf Channel Academy, I am able to give each student a positive atmosphere and a plan for success. Having a fun and customized interactive practice is the best way to improve our golf games and work towards achieving our goals.”
						</blockquote> --}}
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" role="dialog" id="contactBrian">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contact Brian</h4>
				</div>
				<form method="POST" action="{{ route('contact.send') }}">
					{{ csrf_field() }}
					<input type="hidden" name="sendTo" value="brian">

					<div class="modal-body">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" name="name" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Email Address</label>
							<input type="email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Message</label>
							<textarea name="body" class="form-control" rows="8" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" role="dialog" id="contactRob">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contact Rob</h4>
				</div>
				<form method="POST" action="{{ route('contact.send') }}">
					{{ csrf_field() }}
					<input type="hidden" name="sendTo" value="rob">

					<div class="modal-body">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" name="name" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Email Address</label>
							<input type="email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Message</label>
							<textarea name="body" class="form-control" rows="8" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" role="dialog" id="ratesRob">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Rob's Rates</h4>
				</div>
				<div class="modal-body">
					<dl>
						<dt>60-Minute Private Lesson</dt>
						<dd>$100/hour</dd>
						<dd>$150/hour w/ Trackman</dd>

						<dt>Elite Coaching</dt>
						<dd>$340/month</dd>

						<dt>Premium Coaching</dt>
						<dd>$190/month (3 month commitment)</dd>
						<dd>$180/month (6 month commitment)</dd>

						<dt>Flex Coaching (6 month commitment)</dt>
						<dd>$80/month and $60/lesson</dd>
					</dl>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
@endsection