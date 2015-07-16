<?php namespace Jplata\Sample\Http\Composers;

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
		$post = Mrcore::post()->prepare();
		$view->with('post', $post);

		$view->with('navTitle', 'Navigation');
        $view->with('navItems', array(
                ['key' => 'dashboard', 'display' => 'Dashboard'],                
                ['key' => 'menuitem1', 'display' => 'MenuItem 1', 'url' => ''],
                ['key' => 'menuitem2', 'display' => 'MenuItem 2', 
                    'subnav' => array(
                        ['key' => 'submenuitem1', 'display' => 'Sub MenuItem 1', 'url' => ''],
                        ['key' => 'submenuitem2', 'display' => 'Sub MenuItem 2', 'url' => '']
                    )
                ]                       
            )
        );
	}

}