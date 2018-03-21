<?php

Route::get('/', 'SiteController@home')->name('home');
Route::view('new-students', 'new-students')->name('new-students');
Route::view('instruction', 'instruction')->name('instruction');
Route::view('instruction/trackman', 'trackman')->name('trackman');
Route::view('youth-golf', 'youth-golf')->name('youth-golf');
Route::view('golf-channel-academy', 'gca')->name('gca');
Route::view('contact', 'contact')->name('contact');
Route::view('partners', 'partners')->name('partners');
Route::view('privacy-policy', 'privacy-policy')->name('privacy');
Route::view('staff', 'staff')->name('staff');
Route::view('book-now', 'book-now')->name('book-now');
Route::post('contact', 'SiteController@sendContact')->name('contact.send');

Route::view('media-room', 'media-index')->name('media.index');
Route::get('media-room/photos', 'MediaController@photos')->name('media.photos');
Route::get('media-room/videos', 'MediaController@videos')->name('media.videos');
Route::get('v/{code}', 'MediaController@showVideo')->name('media.video');

Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{event}', 'EventsController@show')->name('events.show');
