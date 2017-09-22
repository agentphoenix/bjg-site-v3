<?php namespace App\Http\Controllers;

use Date;
use Mail;
use App\Mail\ContactSent;
use Illuminate\Http\Request;

class SiteController extends Controller
{
	public function home()
	{
		$path = storage_path('app/events.json');
		$contents = file_get_contents($path);
		$json = json_decode($contents, true);

		$events = collect($json)->filter(function ($e) {
			return $e['featured'] === true;
		})->filter(function ($e) {
			$endDate = Date::createFromFormat('m/d/Y', $e['end_date']);

			return $endDate->gte(Date::now()->startOfDay());
		});

		return view('home', compact('events'));
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

		$recipient = 'brian@brianjacobsgolf.com';

		if ($request->has('sendTo')) {
			switch ($request->get('sendTo')) {
				case 'brian':
				default:
					$recipient = 'brian@brianjacobsgolf.com';
					break;

				case 'rob':
					$recipient = 'robcomererpga@gmail.com';
					break;
			}
		}

		Mail::to($recipient)
			->send(new ContactSent($request->all()));

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
		$fileList = collect(json_decode(file_get_contents(storage_path('app/media.json')), true));

		return view('media', compact('fileList'));
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

	public function staff()
	{
		return view('staff');
	}
}
