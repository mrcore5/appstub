<?php

/**
 * Mrcore Foundation Configuration File
 *
 * All configs use env() so you can override in your own .env
 * You can also publish the entire configuration with
 * ./artisan vendor:publish --tag="mrcore.appstub.configs"
 * This config is merged, meaning it handles partial overrides
 * Access with Config::get('mrcore.appstub.test')
 */
return [

	'test' => env('APPSTUB_TEST', 'this is a test'),

];
