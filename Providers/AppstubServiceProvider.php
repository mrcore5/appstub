<?php namespace Mrcore\Appstub\Providers;

use Event;
use Module;
use Illuminate\Foundation\AliasLoader;
use Mrcore\Modules\Foundation\Support\ServiceProvider;

class AppstubServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Mrcore Module Tracking
		Module::trace(get_class(), __function__);

		// Event Subscribers
		#Event::subscribe('Mrcore\Appstub\Listeners\MyEventSubscription');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Mrcore Module Tracking
		Module::trace(get_class(), __function__);

		// Register Facades
		#$facade = AliasLoader::getInstance();
		#$facade->alias('Appstub', 'Mrcore\Appstub\Facades\Appstub');

		// Setup Testing Environment
		#$this->setupTestingEnvironment();

		// Bind and Alias Helper
		#$alias = function($abstract, $aliases = []) {
		#	foreach ($aliases as $alias) {$this->app->alias($abstract, $alias);}
		#};
		#$alias('Mrcore\Appstub\Appstub', ['Mrcore\Appstub']);

		// Merge config
		#$this->mergeConfigFrom(__DIR__.'/../Config/appstub.php', 'mrcore.appstub');

		// Register Other Dynamic Service Providers
		#$this->app->register('Mrcore\Appstub\Providers\OtherServiceProvider');

		// Register Middleware
		#$kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
		#$kernel->pushMiddleware('Mrcore\Appstub\Http\Middleware\DoSomething');

		// Register Artisan Commands
		#$this->commands('Mrcore\Appstub\Console\Commands\DbCommand');
	}

	/**
	 * Running in test environment.
	 *
	 * @return void
	 */
	public function setupTestingEnvironment()
	{
		// Testing - Entire fake entity and repository for testing
		if ($this->app->environment('testing')) {
			//
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		// Only required if $defer = true and you add bindings
		//return ['Mrcore\Appstub\Stuff', 'other bindings...'];
	}

}
