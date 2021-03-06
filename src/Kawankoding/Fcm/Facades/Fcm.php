<?php

namespace Kawankoding\Fcm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Fcm
 * @package Kawankoding\Fcm\Facades
 */
class Fcm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fcm';
    }
}
