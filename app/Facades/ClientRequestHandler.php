<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ClientRequestHandler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'client-request-handler';
    }
}
