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
		return View::make('appstub::welcome');
	}

}
