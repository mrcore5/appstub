<?php namespace Mrcore\Appstub\Console\Commands;

use Mrcore\Foundation\Console\Commands\AppCommand as Command;

/**
 * Mrcore app/module helper command
 * @copyright 2015 Matthew Reschke
 * @license http://mreschke.com/license/mit
 * @author Matthew Reschke <mail@mreschke.com>
 */
class AppCommand extends Command
{
	protected $signature = 'mrcore:appstub:app';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->name = 'appstub';
		$this->ns = 'Mrcore\Appstub';
		$this->path = ['vendor/mrcore/appstub', '../Apps/Mrcore/Appstub'];
		$this->connection = 'appstub';
		$this->seeder = 'AppstubSeeder';
		parent::__construct();
	}

}
