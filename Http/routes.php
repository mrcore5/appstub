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

// App global view composer
View::composer('appstub::layout', 'Mrcore\Appstub\Http\Composers\ViewComposer');

// Admin Routes
// FIXME add middleware?..used to be a filter, now deprecated in laravel
Route::group(array('prefix' => 'admin'), function() {

	Route::get('/', function() {
		return "Welcome to admin";
	});

});

// Test
Route::get('/test', function() {
	return Mrcore\Appstub\Support\Test::hi();
});

// Route controllers must be last
#Route::controllers([
#	'/' => 'AppstubController'
#]);
Route::get('/', 'AppstubController@index');
