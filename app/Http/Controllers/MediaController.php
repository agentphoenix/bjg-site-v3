<?php namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;

class MediaController extends Controller
{
	public function photos()
	{
		// TEST ACCOUNT
		// $instagram = new Instagram('674894607.1677ed0.08617d87478244fe9c207be2aca7457f');
		$instagram = new Instagram('497043006.1677ed0.d38a4f2dcb164575acce86259c2ba452');

		$media = $instagram->get();

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
