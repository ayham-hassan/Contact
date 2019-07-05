<?php
namespace App\Listeners\Backend;

/**
 * Class ContactActivityEventListener.
 */
/**
 * Class ContactActivityCreated.
 */
class ContactActivityEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('ContactActivity Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('ContactActivity  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('ContactActivity Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\ContactActivity\ContactActivityCreated::class,
            'App\Listeners\Backend\ContactActivityEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\ContactActivity\ContactActivityUpdated::class,
            'App\Listeners\Backend\ContactActivityEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\ContactActivity\ContactActivityDeleted::class,
            'App\Listeners\Backend\ContactActivityEventListener@onDeleted'
        );
    }
}
