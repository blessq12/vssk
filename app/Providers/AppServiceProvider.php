<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('telegram-notification', function () {
            return new \App\Services\TelegramNotification();
        });
        $this->app->bind('client-request-handler', function () {
            return new \App\Services\ClientRequestHandler();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
