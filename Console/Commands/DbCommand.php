<?php namespace Mrcore\Appstub\Console\Commands;

use Mrcore\Foundation\Support\Migrations;

class DbCommand extends Migrations
{
	protected $signature = 'mrcore:appstub:db';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->connection = 'appstub'
		$this->seeder = 'AppstubSeeder';
		$this->path = ['vendor/mrcore/appstub', '../Apps/Mrcore/Appstub'];
		parent::__construct();
	}

}
