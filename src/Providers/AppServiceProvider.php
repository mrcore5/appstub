<?php

namespace Mrcore\Appstub\Providers;

use Illuminate\Routing\Router;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Register facades and class aliases
        $this->registerFacades();

        // Register configs
        $this->registerConfigs();

        // Register services
        $this->registerServices();

        // Register console
        $this->registerConsole();

        // Register testing environment
        $this->registerTesting();
    }

    /**
     * Bootstrap the application services.
     *
     * @return voidw
     */
    public function boot(Kernel $kernel, Router $router)
    {
        // Boot publishers
        $this->bootPublishers();

        // Boot migrations
        $this->bootMigrations();

        // Boot global, group and route middleware
        $this->bootMiddleware($kernel, $router);

        // Boot views
        $this->bootViews();
    }

    /**
     * Define facades and class aliases.
     *
     * @return void
     */
    protected function registerFacades()
    {
        #$facade = AliasLoader::getInstance();
        #$facade->alias('Appstub', \Mrcore\Appstub\Facades\Appstub::class);
        #class_alias('Some\Long\Class', 'Short');
    }

    /**
     * Define additional configs and merges.
     *
     * @return void
     */
    protected function registerConfigs()
    {
        // Merge configs
        $this->mergeConfigFrom($this->appPath('config/appstub.php'), 'mrcore.appstub');

        // Append or overwrite configs
        #config(['test' => 'hi']);
    }

    /**
     * Define the application and other services.
     *
     * @return void
     */
    protected function registerServices()
    {
        // Register other service providers
        $this->app->register(\Mrcore\Appstub\Providers\AuthServiceProvider::class);
        #$this->app->register(\Mrcore\Appstub\Providers\BroadcastServiceProvider::class);
        $this->app->register(\Mrcore\Appstub\Providers\EventServiceProvider::class);
        $this->app->register(\Mrcore\Appstub\Providers\RouteServiceProvider::class);

        // Register IoC binding
        #$this->app->alias(\Mrcore\Appstub\Appstub::class, \Mrcore\Appstub::class)
        #$this->app->singleton(\Mrcore\Appstub\Appstub::class, \Mrcore\Appstub::class)
    }

    /**
     * Define console kernel (commands and schedules).
     *
     * @return void
     */
    protected function registerConsole()
    {
        // Console only
        if (!$this->app->runningInConsole()) {
            return;
        }

        // Firing up the kernel also defines the schedules there
        $kernel = $this->app->make(\Mrcore\Appstub\Console\Kernel::class);
    }

    /**
     * Define test environment overrides.
     *
     * @return void
     */
    protected function registerTesting()
    {
        // Console only
        if (!$this->app->runningInConsole()) {
            return;
        }

        if (!$this->app->environment('testing')) {
            return;
        } // Testing only

        // Register testing environment configs or settings
    }

    /**
     * Define the published resources and configs.
     *
     * @return void
     */
    protected function bootPublishers()
    {
        // Console only
        if (!$this->app->runningInConsole()) {
            return;
        }

        // Config publishing rules
        // Configs are also accessible where they are in the package
        // becuase of registerConfigs(), but if you wanted to publish them
        // to override, this is how.
        // ./artisan vendor:publish --tag="mrcore.appstub.configs"
        #$this->publishes([
        #    $this->appPath('congig') => base_path('config/mrcore'),
        #], 'mrcore.appstub.configs');

        // Migration publishing rules
        // Migrations are also accessible where they are in the package
        // becuase of bootMigrations, but if you wanted to publish them
        // to override, this is how.
        // ./artisan vendor:publish --tag="mrcore.appstub.migrations"
        #$this->publishes([
        #    $this->appPath('database/migrations') => base_path('database/migrations'),
        #], 'mrcore.appstub.migrations');

        // Seed publishing rules
        // Seeds are also accessible where they are in the package
        // becuase of how mrcore seeds, but if you wanted to publish them
        // to override, this is how.
        // ./artisan vendor:publish --tag="mrcore.appstub.seeds"
        #$this->publishes([
        #    $this->appPath('database/seeds') => base_path('database/seeds'),
        #], 'mrcore.appstub.seeds');

        // Public asset publishing rules
        // I don't generally publish public assets because mrcore
        // has a great asset manager that lets you access the assets
        // right where they are from teh package, no need to publish or symlink
        // ./artisan vendor:publish --tag="mrcore.appstub.public"
        #$this->publishes([
        #    $this->appPath('public') => public_path('vendor/mrcore/appstub'),
        #], 'mrcore.appstub.public');
    }

    /**
     * Define the migrations.
     *
     * @return void
     */
    protected function bootMigrations()
    {
        // Console only
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->loadMigrationsFrom($this->appPath('database/migrations'));
    }

    /**
     * Define global and route based middleware.
     *
     * @param Illuminate\Contracts\Http\Kernel $kernel
     * @param \Illuminate\Routing\Router $router
     * @return  void
     */
    protected function bootMiddleware(Kernel $kernel, Router $router)
    {
        // Web only
        if ($this->app->runningInConsole()) {
            return;
        }

        // Get apps kernel
        $appKernel = $this->app->make(\Mrcore\Appstub\Http\Kernel::class);

        // Push global middleware
        foreach ($appKernel->middleware as $globalMiddleware) {
            $kernel->pushMiddleware($globalMiddleware);
        }

        // Push middleware groups
        foreach ($appKernel->middlewareGroups as $group => $middlewares) {
            foreach ($middlewares as $middleware) {
                $router->pushMiddlewareToGroup($group, $middleware);
            }
        }

        // Add route based middleware
        foreach ($appKernel->routeMiddleware as $key => $middleware) {
            $router->middleware($key, $middleware);
        }
    }

    /**
     * Define views.
     *
     * @return void
     */
    protected function bootViews()
    {
        // Web only
        if ($this->app->runningInConsole()) {
            return;
        }

        // Load views from path
        // loadViewsFrom is same as View::addNamespace()
        $this->loadViewsFrom($this->appPath('resources/views'), 'appstub');

        // Share global value wiht all views
        #View::share('key', 'value');
    }

    /**
     * Append apps basepath to $path.
     *
     * @return string
     */
    protected function appPath($path)
    {
        return realpath(__DIR__.'/../../'.$path);
    }
}
