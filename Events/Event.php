<?php namespace Mrcore\Appstub\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

abstract class Event #implements ShouldBroadcastNow
{

	/**
	 * Get the channels the event should be broadcast on
	 * @return array
	 */
	public function broadcastOn()
	{
		return ['mrcore/appstub'];
	}

}
