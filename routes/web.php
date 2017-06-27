<?php

Route::get('/', 'SiteController@home')->name('home');
Route::get('new-students', 'SiteController@newStudents')->name('new-students');
Route::get('instruction', 'SiteController@instruction')->name('instruction');
Route::get('instruction/trackman', 'SiteController@trackman')->name('trackman');
Route::get('youth-golf', 'SiteController@youthGolf')->name('youth-golf');
Route::get('golf-channel-academy', 'SiteController@gca')->name('gca');
Route::get('contact', 'SiteController@contact')->name('contact');
Route::post('contact', 'SiteController@sendContact')->name('contact.send');
Route::get('events', 'SiteController@events')->name('events.all');
Route::get('events/{event}', 'SiteController@showEvent')->name('events.show');
Route::get('partners', 'SiteController@partners')->name('partners');
Route::get('privacy-policy', 'SiteController@privacy')->name('privacy');
Route::get('media-room', 'SiteController@media')->name('media');
Route::get('staff', 'SiteController@staff')->name('staff');
