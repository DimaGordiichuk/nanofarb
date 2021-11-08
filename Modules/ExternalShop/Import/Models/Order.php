<?php

namespace Modules\ExternalShop\Import\Models;

/**
 * Class Order
 *
 * @package Modules\ExternalShop\Import\Models\Prom
 *
 * @property-read int $id
 * @property-read string $number
 * @property-read Client $client
 * @property-read string $status
 * @property-read array|Purchase $purchases
 */
final class Order extends Model
{
    //...
}