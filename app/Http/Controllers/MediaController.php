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

		return view('photos', compact('media'));
	}

	public function videos()
	{
		$fileList = $this->getMedia();

		return view('videos', compact('fileList'));
	}

	public function showVideo($code)
	{
		$video = $this->getMedia()->where('code', $code)->first();

		return view('video', compact('video'));
	}

	protected function getMedia()
	{
		return collect(json_decode(file_get_contents(storage_path('app/media.json')), true));
	}
}
