<?php

namespace Modules\ExternalShop\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\ExternalShop\Entities\Order;
use Modules\ExternalShop\Events\OrderCreated;
use Modules\ExternalShop\Import\Shop;

class GetOrders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $source;
    protected $force;
    protected $last;
    protected $event;
    protected $shop;

    /**
     * GetOrders constructor.
     * @param string $source
     * @param bool $force
     * @param bool $last
     * @param bool $event
     */
    public function __construct(
        string $source,
        bool $force = false,
        bool $last = false,
        bool $event = false
    ) {
        $this->source = $source;
        $this->force = $force;
        $this->last = $last;
        $this->event = $event;
        $this->shop = new Shop();
    }

    /**
     * @throws \Exception
     */
    public function handle()
    {
        if ($this->stopJob()) {
            return;
        }

        \Log::info('Start job [ExternalShopGetLastOrders]: ' . $this->source);

        $apiShop = $this->shop->init($this->source);

        if ($this->last) {
            $externalOrders = $apiShop->getLastOrders();
        } else {
            $externalOrders = $apiShop->getOrders();
        }

        foreach ($externalOrders as $externalOrder) {
            $this->saveOrder($externalOrder, $this->source, $this->force);
        }
    }

    public function stopJob()
    {
        if ($this->source === Shop::TYPE_ROZETKA) {
            if (empty(variable('externalshop_rozetka_username')) || empty(variable('externalshop_rozetka_password'))) {
                \Log::warning("Api arguments for external driver [$this->source] not set.");
                return true;
            }
        }

        if ($this->source === Shop::TYPE_PROM) {
            if (empty(variable('externalshop_prom_token'))) {
                \Log::warning("Api arguments for external driver [$this->source] not set.");
                return true;
            }
        }

        return false;
    }

    /**
     * @param $order
     * @param $source
     * @param bool $force
     * @return bool
     */
    public function saveOrder($order, $source, bool $force = false)
    {
        if ($force) {
            $order = Order::withTrashed()->updateOrCreate([
                'source' => $source,
                'external_id' => $order->id,
            ], $this->shop->makeOrderData($order, $source));
        } elseif (!Order::withTrashed()->where('external_id', $order->id)->where('source', $source)->first()) {
            $order = Order::create($this->shop->makeOrderData($order, $source));
            if ($this->event) {
                event(new OrderCreated($order));
            }
            return $order;
        }

        return false;
    }




}
