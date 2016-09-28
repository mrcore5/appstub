<?php

namespace Mrcore\Appstub\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel #extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    public $middleware = [
        //\Mrcore\Appstub\Http\Middleware\SomeGlobalMiddleware::class
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    public $middlewareGroups = [
        'web' => [
            //\Mrcore\Appstub\Http\Middleware\SomeGlobalMiddleware::class
        ],

        'api' => [
            #'throttleX:60,1',
            #'bindingsX',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    public $routeMiddleware = [
        #'bindingsX' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        #'throttleX' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
