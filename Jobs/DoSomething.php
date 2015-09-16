<?php namespace Mrcore\Appstub\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;

class DoSomething extends Job implements SelfHandling
{
	protected $someData;

	/**
	 * Create a new job instance
	 *
	 * @param string $someData
	 */
	public function __construct($someData)
	{
		$this->someData = $someData;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		//
	}

}
