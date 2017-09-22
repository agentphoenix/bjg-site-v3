<?php namespace App\Http\Controllers;

use Date;
use Illuminate\Http\Request;

class EventsController extends Controller
{
	protected $events;

	public function __construct()
	{
		parent::__construct();

		$path = storage_path('app/events.json');
		$contents = file_get_contents($path);
		$json = json_decode($contents, true);

		$this->events = collect($json);
	}

	public function index()
	{
		$events = $this->events->filter(function ($e) {
			$endDate = Date::createFromFormat('m/d/Y', $e['end_date']);

			return $endDate->gte(Date::now()->startOfDay());
		});

		return view('events', compact('events'));
	}

	public function show($event)
	{
		// Filter down to only the event we want
		$ev = $this->events->filter(function ($e) use ($event) {
			return $e['slug'] == $event;
		})->first();

		return view('events-show', compact('ev'));
	}
}
