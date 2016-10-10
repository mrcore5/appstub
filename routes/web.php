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


Route::get('/', function () {
    #$test = config('mrcore.appstub.test'); dd($test);
    return view('appstub::layout', [
        'page' => 'home',
        'data' => [
            'user' => 'matthew'
        ]
    ]);
});
