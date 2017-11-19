<?php

Route::get('/', 'SiteController@home')->name('home');
Route::get('new-students', 'SiteController@newStudents')->name('new-students');
Route::get('instruction', 'SiteController@instruction')->name('instruction');
Route::get('instruction/trackman', 'SiteController@trackman')->name('trackman');
Route::get('youth-golf', 'SiteController@youthGolf')->name('youth-golf');
Route::get('golf-channel-academy', 'SiteController@gca')->name('gca');
Route::get('contact', 'SiteController@contact')->name('contact');
Route::post('contact', 'SiteController@sendContact')->name('contact.send');
Route::get('partners', 'SiteController@partners')->name('partners');
Route::get('privacy-policy', 'SiteController@privacy')->name('privacy');
Route::get('staff', 'SiteController@staff')->name('staff');

Route::get('media-room', 'MediaController@index')->name('media.index');
Route::get('media-room/photos', 'MediaController@photos')->name('media.photos');
Route::get('media-room/videos', 'MediaController@videos')->name('media.videos');
Route::get('v/{code}', 'MediaController@showVideo')->name('media.video');

Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{event}', 'EventsController@show')->name('events.show');
