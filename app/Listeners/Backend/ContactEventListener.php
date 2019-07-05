<?php
namespace App\Listeners\Backend;

/**
 * Class ContactEventListener.
 */
/**
 * Class ContactCreated.
 */
class ContactEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Contact Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Contact  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Contact Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Contact\ContactCreated::class,
            'App\Listeners\Backend\ContactEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Contact\ContactUpdated::class,
            'App\Listeners\Backend\ContactEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Contact\ContactDeleted::class,
            'App\Listeners\Backend\ContactEventListener@onDeleted'
        );
    }
}
