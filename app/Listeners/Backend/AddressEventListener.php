<?php
namespace App\Listeners\Backend;

/**
 * Class AddressEventListener.
 */
/**
 * Class AddressCreated.
 */
class AddressEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Address Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Address  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Address Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Address\AddressCreated::class,
            'App\Listeners\Backend\AddressEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Address\AddressUpdated::class,
            'App\Listeners\Backend\AddressEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Address\AddressDeleted::class,
            'App\Listeners\Backend\AddressEventListener@onDeleted'
        );
    }
}
