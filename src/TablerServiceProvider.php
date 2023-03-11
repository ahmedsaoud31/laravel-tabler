<?php

namespace Tabler;

use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/tabler.php' => config_path('tabler.php'),
        ]);
        $this->publishes([
            __DIR__.'/../app/Http/Controllers/TablerController.php' => app_path('Http/Controllers/TablerController.php'),
        ]);
        $this->publishes([
            __DIR__.'/../resources/views/tabler' => resource_path('views/tabler'),
        ]);
        $this->publishes([
            __DIR__.'/../lang' => base_path('lang'),
        ]);
        $this->publishes([
            __DIR__.'/../public/tabler' => public_path('/tabler'),
        ], 'public');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}