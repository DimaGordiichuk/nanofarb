<?php

namespace Modules\ExternalShop\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyOfOrderCreated implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
      //...
    }

    /**
     * Handle the event.
     *
     * @param  \Modules\ExternalShop\Events\OrderCreated  $event
     * @return void
     */
    public function handle(\Modules\ExternalShop\Events\OrderCreated $event)
    {
        $order = $event->order;

        if (variable('externalshop_send_seller_email')) {
            $mails = array_map(function ($mail) {
                return trim($mail);
            }, explode(',', variable('mail_to_address')));
            if ($mails) {
                \Mail::to($mails)
                    ->send(new \App\Mail\CustomMail('Сохранен новый заказ', 'externalshop::.mails.new-order', [
                        'order' => $order,
                    ]));
            }
        }
    }
}
