@extends('layouts.page')

@section('title', 'New Students')

@section('content')
	<section>
	    <div class="container">
	        <h1>New Students</h1>

	        <p>We're confident that with our proven coaching, you'll gain skills that translate into positive results that'll keep you coming back. Students new to Brian Jacobs Golf can sign up for a 1-hour Swing and Skills Assessment designed to get you started on the path to a better golf game.</p>

	        <p>Our New Student Assessment is an opportunity for you to meet and interact with a Brian Jacobs Golf Certified Coach/PGA Professional at Ridgemont Country Club to see if we're a fit for you. During the 1-hour session, you and your Coach will get to know each other. We want to learn about your unique needs and goals. When we know where you want to go, we can better help you get there! Using proven techniques and technology, your Coach will observe all aspects of the game &mdash; driving, iron play, putting, chipping, and bunker play.</p>

	        <p>After your assessment, your Coach will outline possible programs that may align with your goals, available time, and resources. There's no pressure or obligation to "buy" or commit, but if you decide that Brian Jacobs Golf is for you, we can help you get started on your journey to better golf!</p>

			<p class="visible-xs visible-sm"><a href="{{ route('book-now') }}" class="btn btn-primary btn-block btn-lg">Get Started Today!</a></p>

			<p class="visible-md visible-lg"><a href="{{ route('book-now') }}" class="btn btn-primary btn-lg">Get Started Today!</a></p>
	    </div>
	</section>
@endsection
