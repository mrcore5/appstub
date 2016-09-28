<?php namespace Mrcore\Appstub\Listeners;

use Illuminate\Foundation\Bus\DispatchesJobs;

class MyEventSubscription
{
    use DispatchesJobs;

    /**
     * Handle some crazy event
     * @param  \Mrcore\Appstub\Events\SomeCrazyEvent $payload
     */
    public function someCrazyEventHandler(SomeCrazyEvent $payload)
    {
        #extract((array) $payload);
        #echo $someCrazyData
        #$this->dispatch(new DoSomething('someData'));
    }

    /**
     * Register the listeners for the subscriber
     * @param  Illuminate\Events\Dispatcher  $dispatcher
     * @return array
     */
    public function subscribe($dispatcher)
    {
        $dispatcher->listen('Mrcore\Appstub\Events\SomeCrazyEvent',
            'Mrcore\Appstub\Listeners\MyEventSubscription@someCrazyEventHandler'
        );
    }
}
