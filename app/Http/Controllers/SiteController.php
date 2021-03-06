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
		})->sortBy('featuredSort');

		return view('home', compact('events'));
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

				case 'gonzalez':
					$recipient = 'stephengonzalez@gmail.com';
					break;

				case 'ross':
					$recipient = 'jross8830@outlook.com';
					break;

				case 'hughes':
					$recipient = 'mhughes@agape-pt.com';
					break;
			}
		}

		Mail::to($recipient)
			->send(new ContactSent($request->all()));

		return back()
			->with('flash', 'Your message has been sent!');
	}

	public function media()
	{
		$fileList = collect(json_decode(file_get_contents(storage_path('app/media.json')), true));

		return view('media', compact('fileList'));
	}
}
