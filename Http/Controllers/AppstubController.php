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
			'title' => 'mRCore Application',
			'subtitle' => 'Your mRCore Application',
			'key' => 'dashboard'
		];

		return View::make('appstub::welcome', compact('page'));
	}

}
