<?php
namespace App\Listeners\Backend;

/**
 * Class StatusEventListener.
 */
/**
 * Class StatusCreated.
 */
class StatusEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Status Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Status  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Status Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Status\StatusCreated::class,
            'App\Listeners\Backend\StatusEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Status\StatusUpdated::class,
            'App\Listeners\Backend\StatusEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Status\StatusDeleted::class,
            'App\Listeners\Backend\StatusEventListener@onDeleted'
        );
    }
}
