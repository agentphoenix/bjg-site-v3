<?php

Route::get('/', function () {
	return view('home');
})->name('home');

Route::get('new-students', function () {
	return view('new-students');
})->name('new-students');

Route::get('instruction', function () {
	return view('instruction');
})->name('instruction');

Route::get('instruction/trackman', function () {
	return view('trackman');
})->name('trackman');

Route::get('youth-golf', function () {
	return view('youth-golf');
})->name('youth-golf');

Route::get('golf-channel-academy', function () {
	return view('gca');
})->name('gca');

Route::get('contact', function () {
	return view('contact');
})->name('contact');

Route::post('contact', function () {
	return back();
})->name('contact.send');

Route::get('events', function () {
	return view('events');
})->name('events.all');

Route::get('events/{event}', function ($event) {
	return view('events-show', compact('event'));
})->name('events.show');

Route::get('partners', function () {
	return view('partners');
})->name('partners');

Route::get('privacy-policy', function () {
	return view('privacy-policy');
})->name('privacy');

Route::get('media', function () {
	//
})->name('media');
