<?php

namespace Modules\ExternalShop\Import\Contracts;

use Modules\ExternalShop\Import\Models\Order;

/**
 * Interface ShopDriverInterface
 *
 * @package Modules\ExternalShop\Import\Contracts
 */
interface ShopDriverInterface
{
    public function getOrders(array $params = []);

    public function getLastOrders($lastParam = null, array $params = []);

    public function getOrder($id): Order;

    public function setOrderStatus($id, $status);
}