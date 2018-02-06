<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') &middot; Brian Jacobs Golf</title>
        <meta name="author" content="Brian Jacobs Golf">
		<meta name="description" content="Brian Jacobs Golf is premier golf instruction academy based in Rochester, NY and part of the Golf Channel Academy network of golf instructors. Our passion is working with students to develop tailored coaching plans to help students improve, on and off the course.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="manifest" href="/manifest.json">

        <script src="{{ asset('js/fontawesome.min.js') }}"></script>
        <script src="{{ asset('js/packs/brands.min.js') }}"></script>
        <script src="{{ asset('js/packs/solid.min.js') }}"></script>
        <script src="{{ asset('js/packs/regular.min.js') }}"></script>
        <script src="{{ asset('js/packs/light.min.js') }}"></script>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        								{{-- <h3 class="callout__title">About Us</h3>
        								<p>We provide world-class golf coaching, partnering with <a href="{{ route('gca') }}">The Golf Channel Academy</a> and other <a href="{{ route('partners') }}">premier partners</a> to provide you with the best resources for your golf game.</p> --}}
                                        <h3 class="callout__title">The Takeaway</h3>
                                        <p>Join Brian Jacobs on <a href="https://www.facebook.com/brianjacobsgolf" target="_blank" rel="noopener">Facebook Live</a> every Tuesday at 2pm for a golf instruction show that'll answers your questions and help you become a better golfer.</p>
        							</div>
        							<div class="callout__footer">
                                        @php($now = Date::now('America/New_York'))

                                        @if ($now->dayOfWeek == Date::TUESDAY and $now->hour == 14 and $now->minute >= 0 and $now->minute <= 20)
                                            <a href="https://www.facebook.com/brianjacobsgolf" target="_blank" rel="noopener" class="btn btn-default btn-lg btn-block d-flex align-items-center justify-content-center">
                                                <svg id="logo" class="logo mr-3" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416.69 144" height="18"><title>fb-live-logo</title><rect id="Blue-2" data-name="Blue" x="159.09" width="257.6" height="144" rx="7.95" ry="7.95" style="fill:#ee4242"></rect><path d="M520.54,237.07H492V220h27v-8.87H492V194.93h28.57v-9.42H481.07v61h39.47v-9.42Zm-71.08,9.42,21.09-61H458.92l-15.21,48.26H443l-15.34-48.26h-12l21.3,61h12.55Zm-44.37,0v-61h-10.9v61h10.9Zm-22.65-9.55h-28V185.51h-10.9v61h38.88v-9.55Z" transform="translate(-144.15 -144)" style="fill:#fff;fill-rule:evenodd"></path></svg>
                                                Watch Now
                                            </a>
                                        @else
                                            <a href="https://www.facebook.com/brianjacobsgolf" target="_blank" rel="noopener" class="btn btn-default btn-lg btn-block">Learn More</a>
                                        @endif
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
        								<p>The first step to improving is committing to change. Book a lesson today to start down the path of better golf and more enjoyment from the game.</p>
        							</div>
        							<div class="callout__footer">
        								<a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank" rel="noopener" class="btn btn-default btn-lg btn-block">Book Now</a>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </aside>

        <main>
            @if (session()->has('flash'))
                <div class="alert alert-success">
                    <div class="container">
                        {{ session('flash') }}
                    </div>
                </div>
            @endif

            @yield('content')
        </main>

        @include('partials.footer')

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>
