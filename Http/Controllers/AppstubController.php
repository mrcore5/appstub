<?php namespace Mrcore\Appstub\Http\Controllers;

use Gate;
use View;
use Mrcore;

class AppstubController extends Controller
{
    protected $tool = ['ns' => 'it', 'key' => 'perfmon'];

    /**
     * Display the welcome page
     *
     * @return Response
     */
    public function index()
    {
        // Permissions and Policies
        #Gate::denies('update-post', $post) { abort(403); }
        #or $this->authorize('update-post', $post);
        #or if (\Auth::user()->cant('update-post', $post)) or cannot() or can()
        #or if (auth()->user()->cannot('update-post', $post))
        #or if (policy($post)->update($user, $post))

        // Navbar
        $page = (object) [
            'key' => $this->tool['ns'],
            'subkey' => $this->tool['key']
        ];

        return View::make('appstub::welcome', compact('page'));
    }
}
