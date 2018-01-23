<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// App global view composer
View::composer('appstub::layout', 'Mrcore\Appstub\Http\Composers\ViewComposer');

Route::get('/', 'AppstubController@index');
