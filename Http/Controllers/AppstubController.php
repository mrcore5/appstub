<?php namespace Mrcore\Appstub\Http\Controllers;

use View;
use Mrcore;

class AppstubController extends Controller {

	/**
	 * Display the welcome page
	 *
	 * @return Response
	 */
	public function getIndex()
	{



		#eval(\API::snippet('email'));







		$post = Mrcore::post()->prepare();
		return View::make('appstub::welcome', [
			'post' => $post
		]);
	}

}
