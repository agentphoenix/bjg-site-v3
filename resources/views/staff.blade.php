@extends('layouts.page')

@section('title', 'Staff')

@section('content')
	<section>
		<div class="container">
			<h1>Staff</h1>

			<p>At Brian Jacobs Golf, we're committed to putting the best instructors in front of our students. The relationships we develop are the most important part of what we do. To that end, we've brought together instructors that are highly respected within the industry, have an intense passion about the game of golf, and the drive to help our students succeed both on and off the course.</p>

			<div class="staff">
				<div class="staff-item">
					<div><img src="{{ asset('images/jacobs-avatar.jpg')}}" height="200" width="200" class="img-circle"></div>
					<div>
						<h2>Brian Jacobs <small>Lead Instructor</small></h2>

						<p>Over the last 15 years, Brian Jacobs has worked to empower golfers of all ages to find greater enjoyment from the game he loves so much. His dedication and passion for the game are infectious and have earned him Class A PGA credentials and recognition from the PGA Foundation for helping grow the game of golf. Brian possess an MS Ed in addition to PGA Class A credentials and is a Lead Instructor for Golf Channel Academy. He is a frequent Coach of the Week for Golf Channel and got his training leading golf schools for ESPN Golf Schools.</p>

						<p>Drawing from his unique experience as an accomplished player, caddie, PGA Professional, and golf instructor, Brian brings an invaluable "inside the ropes" perspective to his teaching. Whether you're looking for swing instruction, short game help, course management skills, learning how to manage yourself within a round of golf or preparing your youth golfer to play the game at a high level, Brian has the expertise to help you succeed.</p>

						<a href="https://twitter.com/BrianJacobsgolf" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-twitter"></i></a>
						&nbsp;
						<a href="http://instagram.com/BrianJacobsgolf" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-instagram"></i></a>
						&nbsp;
						<a href="https://www.facebook.com/brianjacobsgolf" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-facebook-square"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactBrian"><i class="fa fa-fw fa-paper-plane"></i></a>
					</div>
				</div>

				<div class="staff-item">
					<div><img src="{{ asset('images/rob-avatar.jpg')}}" height="200" width="200" class="img-circle"></div>
					<div>
						<h2>Rob Comerer <small>Staff Instructor</small></h2>

						<p>Rob is a Class-A PGA Professional and Staff Instructor at Brian Jacobs Golf who has worked and taught at some of the country’s finest clubs, including: the Bucknell Golf Club, Ford’s Colony Country Club, Wilmington Country Club, and most recently, the Baltimore Country Club.</p>

						<p>Rob graduated from Penn State University with a Bachelor of Science Degree in Health and Human Development with PGA Golf Management as his focus. He's had the opportunity to study under some of the most respected individuals in the business. He focuses on analyzing, diagnosing, and fixing flaws in students’ games and has received numerous certifications including Trackman, Swing Catalyst, Eyeline Golf 4PE, Positive Coaching, and US Kids Golf. Rob has also been awarded the US Kids Golf Top 50 Honorable Mention Award.</p>

						<a href="https://twitter.com/RobComererPGA" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-twitter"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#ratesRob"><i class="far fa-fw fa-dollar-sign"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactRob"><i class="fa fa-fw fa-paper-plane"></i></a>
					</div>
				</div>

				<div class="staff-item">
					<div><img src="{{ asset('images/ross-avatar.jpg')}}" height="200" width="200" class="img-circle"></div>
					<div>
						<h2>Jeff Ross <small>Club Fitting</small></h2>

						<p>Jeff Ross, a master club fitter, is Maltby Certified for both club fittings and repairs. He has close to 10 years’ experience identifying the proper club set and make-up specifications for golfers.   Jeff knows how to review each golfer’s unique swing, in relationship with their ball flight to improve performance.</p>

						<p>Jeff graduated from St. John Fisher College with a degree in Sports Management.  He spent several years working in the retail golf industry; this enhanced Jeff’s knowledge of the different types of golf equipment available for players which allows him to match each player to the equipment that best matches his or her swing.</p>

						<!--<a href="http://instagram.com/jross30" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-instagram"></i></a>
						&nbsp;-->
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactRoss"><i class="fa fa-fw fa-paper-plane"></i></a>
					</div>
				</div>

				<div class="staff-item">
					<div><img src="{{ asset('images/gonzalez-avatar.jpg')}}" height="200" width="200" class="img-circle"></div>
					<div>
						<h2>Dr. Stephen Gonzalez <small>Mental Conditioning</small></h2>

						<p>Dr. Stephen P. Gonzalez is an expert in mental training, an Assistant Professor of Sport Psychology at The College at Brockport, and a consultant to organizations and teams. For the last decade, Dr. Gonzalez has worked with the U.S. Army, U.S. Air Force, professional athletes, collegiate athletes, high school athletes, performing artists, and weekend warriors with the ultimate goal of high performances and personal development. Dr. Gonzalez has extensive experience working with golfers to develop a mindset for high performance and brings his passion for helping people to Brian Jacobs Golf.</p>

						<p>Dr. Gonzalez completed his Ph.D. in the Psycho-Social Aspects of Sport at the University of Utah, his M.S. in Sport Psychology from Georgia Southern University, and his B.S. in Psychology from the University of Pittsburgh where he was also an NCAA Division I runner. Additionally, Dr. Gonzalez serves as the Dr. Gonzalez is a Certified Mental Performance Coach (CMPC) through the Association for Applied Sport Psychology and is listed on the United States Olympic Committee’s (USOC) Sport Psychology and Mental Training Registry.</p>

						<a href="https://twitter.com/StevePGonzalez" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-twitter"></i></a>
						&nbsp;
						<a href="https://www.facebook.com/stephenpgonzalez" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="fab fa-fw fa-facebook-square"></i></a>
						&nbsp;
						<a href="http://www.stephen-gonzalez.com/" target="_blank" rel="noopener" class="btn btn-default btn-circle"><i class="far fa-fw fa-globe"></i></a>
						&nbsp;
						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactGonzalez"><i class="fa fa-fw fa-paper-plane"></i></a>
					</div>
				</div>

				{{-- <div class="staff-item">
					<div><img src="{{ asset('images/gonzalez-avatar.jpg')}}" height="200" width="200" class="img-circle"></div>
					<div>
						<h2>Dr. Michael Hughes <small>Orthopedic Specialist</small></h2>

						<p>Dr. Michael R Hughes is an outpatient orthopedic specialist who has been practicing at Agape Physical Therapy in Gates, NY for the past 5 years. He has worked with a wide variety of patient populations ranging from high school, collegiate, and semi-professional athletes to middle-aged sports enthusiasts looking to regain their athletic prowess. Dr. Hughes has been an avid golfer throughout his life and helps to assist his patients with a successful return to pain free and quality movement to improve overall performance in any sport, especially golf.</p>

						<p>Dr. Hughes received his Doctorate of Physical Therapy (DPT) and B.S in Exercise Science from the University at Buffalo. He has been the Clinic Coordinator and head PT of the Gates clinic for the past 5 years. He has also been trained and is the only certified provider of Myofascial Decompression (MFDc) in all of Upstate NY. Myofascial Decompression is a manual therapy technique that combines negative pressure technology with movement science evidence-based principles in orthopedics and sports medicine. The focus of this technique is on the efficiency of motion with fascial mobility and neuromuscular re-education which has helped all types of athletes regain their mobility and attain peak performance.</p>

						<a href="#" class="btn btn-default btn-circle" data-toggle="modal" data-target="#contactHughes"><i class="fa fa-fw fa-paper-plane"></i></a>
					</div>
				</div> --}}
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

	<div class="modal fade" role="dialog" id="contactGonzalez">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contact Dr. Gonzalez</h4>
				</div>
				<form method="POST" action="{{ route('contact.send') }}">
					{{ csrf_field() }}
					<input type="hidden" name="sendTo" value="gonzalez">

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

	<div class="modal fade" role="dialog" id="contactRoss">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contact Jeff Ross</h4>
				</div>
				<form method="POST" action="{{ route('contact.send') }}">
					{{ csrf_field() }}
					<input type="hidden" name="sendTo" value="ross">

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

	<div class="modal fade" role="dialog" id="contactHughes">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contact Dr. Hughes</h4>
				</div>
				<form method="POST" action="{{ route('contact.send') }}">
					{{ csrf_field() }}
					<input type="hidden" name="sendTo" value="hughes">

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
