<?php

namespace App\Providers;

use App\Services\Clients\WappiProClient;
use App\Services\Clients\WhatsappClient;
use App\Services\Notifier;
use App\Services\WhatsappNotifier;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
