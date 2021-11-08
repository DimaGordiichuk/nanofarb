<?php
/**
 * Created by PhpStorm.
 * User: fomvasss
 * Date: 12.12.18
 * Time: 22:13
 */

namespace Fomvasss\LaravelEUS\Facades;

use Fomvasss\LaravelEUS\Contracts\EUSGenerator;
use Illuminate\Support\Facades\Facade as LFacade;

class EUS extends LFacade
{
    public static function getFacadeAccessor()
    {
        return EUSGenerator::class;
    }
}
