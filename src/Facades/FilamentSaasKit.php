<?php

namespace Netizens\FilamentSaasKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Netizens\FilamentSaasKit\FilamentSaasKit
 */
class FilamentSaasKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Netizens\FilamentSaasKit\FilamentSaasKit::class;
    }
}
