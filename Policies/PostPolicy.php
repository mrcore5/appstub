<?php

namespace Mrcore\Appstub\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
	use HandlesAuthorization;

	/**
	 * Create a new policy instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	public function before($user, $ability)
	{
		if ($user->isSuperAdmin()) {
			return true;
		}
	}

	public function update($user, $post)
	{
		return $user->id === $post->user_id;
	}
}
