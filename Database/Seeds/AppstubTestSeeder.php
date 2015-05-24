<?php // Do not use namespaces in seeders

use Mrcore\Appstub\Models\Test;
use Illuminate\Database\Seeder;

class AppstubTestSeeder extends Seeder
{
	public function run()
	{
		Test::create(["key" => "test", "name" => "Test Entry"]);
	}
}
