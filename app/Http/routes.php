<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['web']], function() {
	Route::get('/', [
		'uses' => 'HomeController@getIndex',
		'as' => 'home'
	]);
	Route::get('/quotes/tags/{tag_id}', [
		'uses' => 'QuoteController@getByTag',
		'as' => 'quotes-by-tag'
	]);
	Route::get('/quotes/authors/{author_id}', [
		'uses' => 'QuoteController@getByAuthor',
		'as' => 'quotes-by-author'
	]);
});