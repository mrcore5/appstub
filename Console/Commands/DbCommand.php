<?php namespace Mrcore\Appstub\Console\Commands;

use DB;
use App;
use Config;
use Exception;
use Illuminate\Console\Command;

/**
 * Dynatron Vfi Db Command
 * @copyright Dynatron Software, Inc.
 * @author Matthew Reschke <mreschke@dynatronsoftware.com>
 */
class DbCommand extends Command
{
	protected $name = 'Db';
	protected $package = 'Mrcore/Appstub';
	protected $version = '1.0.0';
	protected $description = 'Db Helper Commands';
	protected $signature = 'mrcore:appstub:db
		{action : migrate, seed, rollback, refresh},
	';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->connection = Config::get('database.connections.appstub');
		$this->path = realpath(__DIR__.'/../../');
		$this->relativePath = "../Apps/Mrcore/Appstub"; // relative to the artisan command
		$this->seeder = 'AppstubSeeder';
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$method = $this->argument('action');
		if (method_exists($this, $method)) {
			$this->$method();
		} else {
			$this->error("$method() method not found");
		}
	}

	/**
	 * Migrate database
	 */
	protected function migrate()
	{
		$this->createDatabase();
		$this->call('migrate', [
			'--database' => $this->connection['database'],
			'--path' => "$this->relativePath/Database/Migrations/"
		]);
	}

	/**
	 * Seed database
	 */
	protected function seed()
	{
		if (App::environment() === 'production') {
			throw new Exception("You cannot seed in production");
		}
		$this->call('db:seed', [
			'--database' => $this->connection['database'],
			'--class' => $this->seeder
		]);
	}

	/**
	 * Rollback migrations
	 */
	protected function rollback()
	{
		$this->call('migrate:rollback', [
			'--database' => $this->connection['database']
		]);
	}

	/**
	 * Refresh migrations (rollback all, then migrate)
	 */
	protected function refresh()
	{
		if (App::environment() === 'production') {
			throw new Exception("You cannot rollback in production");
		}
		$this->rollback();
		$this->migrate();
	}

	/**
	 * Create database if not exists
	 */
	protected function createDatabase()
	{
		$conn = $this->connection;
		DB::statement("CREATE DATABASE IF NOT EXISTS $conn[database]");
	}

}
