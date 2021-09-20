<?php

namespace Callmehalpha\LaravelUtilities;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Callmehalpha\LaravelUtilities\LaravelUtilities
 */
class LaravelUtilitiesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'utilities';
    }
}
