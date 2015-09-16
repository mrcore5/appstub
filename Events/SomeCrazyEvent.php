<?php namespace Mrcore\Appstub\Events;

use Mrcore\Appstub\Events\Event;

class SomeCrazyEvent extends Event
{

	public $someCrazyData;

	/**
	 * Create a new event instance
	 * @param string $someCrazyData
	 */
	public function __construct($someCrazyData)
	{
		$this->someCrazyData = $someCrazyData
	}

}
