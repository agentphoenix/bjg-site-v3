<?php namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;

class MediaController extends Controller
{
	public function index()
	{
		return view('media-index');
	}

	public function photos()
	{
		$instagram = new Instagram;

		$media = $instagram->get('brianjacobsgolf');
		// dd($media);

		return view('photos', compact('media'));
	}

	public function videos()
	{
		$fileList = collect(json_decode(file_get_contents(storage_path('app/media.json')), true));

		return view('videos', compact('fileList'));
	}
}
