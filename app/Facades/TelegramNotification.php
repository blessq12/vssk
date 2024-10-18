<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TelegramNotification extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'telegram-notification';
    }
}
