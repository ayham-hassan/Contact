<?php
namespace App\Listeners\Backend;

/**
 * Class CustomerEventListener.
 */
/**
 * Class CustomerCreated.
 */
class CustomerEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Customer Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Customer  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Customer Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Customer\CustomerCreated::class,
            'App\Listeners\Backend\CustomerEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Customer\CustomerUpdated::class,
            'App\Listeners\Backend\CustomerEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Customer\CustomerDeleted::class,
            'App\Listeners\Backend\CustomerEventListener@onDeleted'
        );
    }
}
