<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PokemonRepository;
use App\Repositories\Interfaces\PokemonRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PokemonRepositoryInterface::class,
            PokemonRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
