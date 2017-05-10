<?php namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactSent;
use Illuminate\Http\Request;

class SiteController extends Controller
{
	public function home()
	{
		return view('home');
	}

	public function contact()
	{
		return view('contact');
	}

	public function sendContact(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'body' => 'required'
		], [
			'name.required' => 'Please enter your name',
			'email.required' => 'Please enter your email address',
			'email.email' => 'Please enter a valid email address',
			'body.required' => 'Please enter a message'
		]);

		Mail::to('david.vanscott@gmail.com')
			->queue(new ContactSent($request->all()));

		return back()
			->with('flash', 'Your message has been sent!');
	}

	public function events()
	{
		return view('events');
	}

	public function showEvent($event)
	{
		//return view('event');
	}

	public function gca()
	{
		return view('gca');
	}

	public function instruction()
	{
		return view('instruction');
	}

	public function media()
	{
		//
	}

	public function newStudents()
	{
		return view('new-students');
	}

	public function partners()
	{
		return view('partners');
	}

	public function privacy()
	{
		return view('privacy-policy');
	}

	public function trackman()
	{
		return view('trackman');
	}

	public function youthGolf()
	{
		return view('youth-golf');
	}
}
