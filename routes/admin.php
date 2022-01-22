<?php

use Illuminate\Support\Facades\Route;

Route::resource('sliders','SliderController');
Route::resource('articles','ArticleController');
Route::resource('contacts','ContactController')->except(['show']);
Route::resource('abouts','AboutController');
Route::resource('categories','CategoryController');
Route::resource('projects','ProjectController');
Route::get('/contacts/socials','ContactController@getSocials')->name('contacts.socials');
Route::post('/contacts/socials','ContactController@postSocials')->name('contacts.socials');
