<?php namespace Mrcore\Appstub\Jobs;

class DoSomething extends Job
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
