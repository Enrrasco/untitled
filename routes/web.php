<?php

Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@contact')->name('contact');
Route::post('/contact','PagesController@store')->name('contact.store');
Route::get('/thanks/{name}','PagesController@thanks')->name('thanks');




