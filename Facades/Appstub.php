<?php namespace Mrcore\Appstub\Facades;

use Illuminate\Support\Facades\Facade;

class Appstub extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Mrcore\Appstub\Appstub';
    }
}
