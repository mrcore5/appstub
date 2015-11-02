<?php namespace Mrcore\Appstub\Providers;

use Gate;
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

		// Boot Policies
		#$this->bootPolicies();
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

		// Register Testing Environment
		#$this->registerTestingEnvironment();

		// Bind and Alias Helper
		#$alias = function($abstract, $aliases = []) {
		#	foreach ($aliases as $alias) {$this->app->alias($abstract, $alias);}
		#};
		#$alias('Mrcore\Appstub\Appstub', ['Mrcore\Appstub']);

		// Merge config
		#$this->mergeConfigFrom(__DIR__.'/../Config/appstub.php', 'mrcore.appstub');

		// Register Other Dynamic Service Providers
		#$this->app->register('Mrcore\Appstub\Providers\OtherServiceProvider');

		// Register Global Middleware
		#$kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
		#$kernel->pushMiddleware('Mrcore\Appstub\Http\Middleware\DoSomething');

		// Register Route Based Middleware
		#Route::middleware('auth.appstub', 'Mrcore\Appstub\Http\Middleware\Authenticate');

		// Register Artisan Commands
		#$this->commands('Mrcore\Appstub\Console\Commands\DbCommand');
	}

	public function bootPolicies()
	{
		// Define permissions (closure or Class@method)
		#Gate::define('update-post', function($user, $post) {
		#	return $user->id === $post->user_id;
		#});

		#Gate::before(function ($user, $ability) {
		#	if ($user->isSuperAdmin()) {
		#		return true;
		#	}
		#});
		# ->after() is also available

		// Or define an entire policy class
		#Gate::policy(App\Post::class, App\Policies\PostPolicy::class);
	}

	/**
	 * Running in test environment.
	 *
	 * @return void
	 */
	public function registerTestingEnvironment()
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
