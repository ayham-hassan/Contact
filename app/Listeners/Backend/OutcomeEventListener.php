<?php
namespace App\Listeners\Backend;

/**
 * Class OutcomeEventListener.
 */
/**
 * Class OutcomeCreated.
 */
class OutcomeEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Outcome Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Outcome  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Outcome Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Outcome\OutcomeCreated::class,
            'App\Listeners\Backend\OutcomeEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Outcome\OutcomeUpdated::class,
            'App\Listeners\Backend\OutcomeEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Outcome\OutcomeDeleted::class,
            'App\Listeners\Backend\OutcomeEventListener@onDeleted'
        );
    }
}
