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
            __DIR__.'/../resources/views/tabler' => resource_path('views/vendor/tabler'),
        ]);
        $this->publishes([
            __DIR__.'/../lang' => base_path('lang/ar.json'),
        ]);
        $this->publishes([
            __DIR__.'/../public' => public_path('/'),
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