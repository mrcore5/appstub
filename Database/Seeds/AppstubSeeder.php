<?php // Do not use namespaces in seeders

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AppstubSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// Order is Critical
		//$this->call('AppstubTestSeeder');
	}

}
