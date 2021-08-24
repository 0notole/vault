<?php

namespace 0notole\Vault;

use Illuminate\Support\ServiceProvider;

class VaultServiceProvider extends ServiceProvider
{

    public function boot () {

        require_once __DIR__.'/helpers.php';
        include __DIR__.'/routes.php';

        $this->publishes([__DIR__.'/config/vault.php' => config_path('vault.php'),]);

        $router = $this->app['router'];

    }

    public function register () {

        $this->app->make('0notole\Vault\Controllers\AuthController');
        $this->app->make('0notole\Vault\Controllers\MainController');
        $this->app->make('0notole\Vault\Controllers\ResourceController');

        $this->loadViewsFrom(__DIR__ . '/views', 'vault');

        // Admin login middleware
        $router->pushMiddlewareToGroup('admin', Middleware\AuthenticateAdmin::class);
        $router->pushMiddlewareToGroup('login', Middleware\Login::class);

    }

}
