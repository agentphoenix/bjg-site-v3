<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') &middot; Brian Jacobs Golf</title>
        <meta name="author" content="Brian Jacobs Golf">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <header class="page">
        	<div class="container">
        		@include('partials.nav')

        		<div class="logo-masthead"></div>
        	</div>
        </header>

        <main id="app">
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
        <script src="https://unpkg.com/vue"></script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        @yield('js')
    </body>
</html>