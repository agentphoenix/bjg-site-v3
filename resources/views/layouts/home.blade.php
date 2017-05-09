<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') &middot; Brian Jacobs Golf</title>
        <meta name="author" content="Brian Jacobs Golf">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('styles')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <!-- High pixel density displays -->
	    <link rel="stylesheet" href="{{ asset('css/hidpi2x.css') }}" media="only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)">
		<link rel="stylesheet" href="{{ asset('css/hidpi3x.css') }}" media="only screen and (-moz-min-device-pixel-ratio: 3), only screen and (-o-min-device-pixel-ratio: 3/1), only screen and (-webkit-min-device-pixel-ratio: 3), only screen and (min-device-pixel-ratio: 3)">
    </head>
    <body>
        <header class="home">
        	<div class="container">
        		@include('partials.nav')

        		<div class="logo-masthead"></div>
        	</div>
        </header>

        <aside>
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="callouts callouts__cascade">
        					<div class="callout__item white-border left">
        						<div class="callout__image"></div>
        						<div class="callout__block">
        							<div class="callout__content">
        								<h3 class="callout__title">About Us</h3>
        								<p>We provide world-class golf coaching, partnering with <a href="{{ route('gca') }}">The Golf Channel Academy</a> and other <a href="{{ route('partners') }}">premier partners</a> to provide you with the best resources for your golf game.</p>
        							</div>
        							<div class="callout__footer">
        								<a href="{{ route('instruction') }}" class="btn btn-default btn-lg btn-block">Learn More</a>
        							</div>
        						</div>
        					</div>

        					<div class="callout__item white-border center highlight">
        						<div class="callout__image"></div>
        						<div class="callout__block">
        							<div class="callout__content">
        								<h3 class="callout__title">New to Brian Jacobs Golf?</h3>
        								<p>Get started on the road to a better golf game with our <strong>New Student Assessment</strong>. Sign up for a 60-minute full swing analysis, short game and putting analysis, and recommended coaching plan. Only $100 (<em>Free if you continue with a coaching program</em>)</p>
        							</div>
        							<div class="callout__footer">
        								<a href="{{ route('new-students') }}" class="btn btn-primary btn-lg btn-block">Get Started Today</a>
        							</div>
        						</div>
        					</div>

        					<div class="callout__item white-border right">
        						<div class="callout__image"></div>
        						<div class="callout__block">
        							<div class="callout__content">
        								<h3 class="callout__title">Start Learning Today!</h3>
        								<p>The first step to improving is committing to change. Book a lesson or enroll in a program today to start down the path of better golf and more enjoyment from the game.</p>
        							</div>
        							<div class="callout__footer">
        								<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" class="btn btn-default btn-lg btn-block">Book Now</a>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </aside>

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </body>
</html>