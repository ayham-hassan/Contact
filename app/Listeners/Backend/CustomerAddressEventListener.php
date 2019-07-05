<?php
namespace App\Listeners\Backend;

/**
 * Class CustomerAddressEventListener.
 */
/**
 * Class CustomerAddressCreated.
 */
class CustomerAddressEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('CustomerAddress Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('CustomerAddress  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('CustomerAddress Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\CustomerAddress\CustomerAddressCreated::class,
            'App\Listeners\Backend\CustomerAddressEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\CustomerAddress\CustomerAddressUpdated::class,
            'App\Listeners\Backend\CustomerAddressEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\CustomerAddress\CustomerAddressDeleted::class,
            'App\Listeners\Backend\CustomerAddressEventListener@onDeleted'
        );
    }
}
