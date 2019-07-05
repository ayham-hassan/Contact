<?php
namespace App\Listeners\Backend;

/**
 * Class TypeEventListener.
 */
/**
 * Class TypeCreated.
 */
class TypeEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Type Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Type  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Type Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Type\TypeCreated::class,
            'App\Listeners\Backend\TypeEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Type\TypeUpdated::class,
            'App\Listeners\Backend\TypeEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Type\TypeDeleted::class,
            'App\Listeners\Backend\TypeEventListener@onDeleted'
        );
    }
}
