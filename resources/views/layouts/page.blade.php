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
        <header class="page">
        	<div class="container">
        		@include('partials.nav')

        		<div class="logo-masthead"></div>
        	</div>
        </header>

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </body>
</html>