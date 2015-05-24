<?php namespace Mrcore\Appstub\Providers;

use Module;
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

		// Mrcore Api Interface Aliases
		#$this->app->alias('Mrcore\Appstub\Stuff', 'Mrcore\Appstub\StuffInterface');

		// Register Middleware
		#$kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
		#$kernel->pushMiddleware('Mrcore\Appstub\Http\Middleware\DoSomething');

		// Register our Artisan Commands
		#$this->commands('Mrcore\Appstub\Console\Commands\TestCommand');
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
