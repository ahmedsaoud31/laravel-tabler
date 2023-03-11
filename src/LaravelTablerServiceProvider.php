<?php

namespace Ahmedsaoud31\Tabler;

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
            __DIR__.'/../config/courier.php' => config_path('courier.php'),
            __DIR__.'/../app/Http/Controllers/TablerController.php' => app_path('Http/Controllers/TablerController.php'),
            __DIR__.'/../resources/views/tabler' => resource_path('views/tabler'),
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