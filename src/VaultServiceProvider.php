<?php

namespace 0notole\Vault;

use Illuminate\Support\ServiceProvider;

class VaultServiceProvider extends ServiceProvider
{

    public function boot () {

        $router = $this->app['router'];

    }

    public function register () {

        $this->app->make('0notole\Vault\Controllers\AuthController');
        $this->app->make('0notole\Vault\Controllers\MainController');
        $this->app->make('0notole\Vault\Controllers\ResourceController');

        $this->loadViewsFrom(__DIR__ . '/views', 'vault');

    }

}
