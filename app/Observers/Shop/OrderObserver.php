<?php

namespace App\Observers\Shop;

use App\Models\Shop\Order;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Models\Shop\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        $order->number = $order->id + 1000;
        if (! $order->ip) {
            $order->ip = request()->ip();
        }
        $order->save();
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Models\Shop\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Models\Shop\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Models\Shop\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Models\Shop\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
