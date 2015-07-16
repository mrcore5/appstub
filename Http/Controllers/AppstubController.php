<?php namespace Mrcore\Appstub\Http\Controllers;

use View;
use Mrcore;

class AppstubController extends Controller
{
	/**
	 * Display the welcome page
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$page = (object) [
			'title' => 'Sample Application',
			'subtitle' => 'Your Sample Application',
			'key' => 'dashboard'
		];

		return View::make('appstub::sample-app');
	}

}
