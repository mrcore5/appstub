<?php namespace Mrcore\Appstub\Http\Composers;

use Mrcore;
use Illuminate\Contracts\View\View;

class ViewComposer
{
	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		// If you want the wiki post dropown menu to show, this $post is required.
		$view->with('post', Mrcore::post()->prepare());
	}

}