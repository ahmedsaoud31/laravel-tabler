<?php

namespace Tabler;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Tabler\Console\Commands\TablerCommand;
use Cache;

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
            __DIR__.'/../app/Http/Controllers/TablerController.php' => app_path('Http/Controllers/TablerController.php'),
            __DIR__.'/../resources/views/tabler' => resource_path('views/tabler'),
            __DIR__.'/../lang' => base_path('lang'),
            __DIR__.'/../public/tabler' => public_path('/tabler'),
            __DIR__.'/../routes' => base_path('/routes'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                TablerCommand::class,
            ]);
        }
        $this->loadViewsFrom(__DIR__.'/../resources/views/tabler', 'tabler');
        //$this->loadViewsFrom(resource_path('views/tabler'), 'tabler');
        $this->loadRoutes();
        $this->cacheSettings();

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    private function cacheSettings()
    {
        if($layout = Cache::get('tabler_layout')){
            if(in_array($layout, config('tabler.layouts'))){
                Config::set('tabler.layout', $layout);
            }
        }

        if($locale = Cache::get('locale')){
            if(in_array($locale, ['ar', 'en'])){
                Config::set('app.locale', $locale);
            }
        } 
    }

    private function loadRoutes()
    {
        if(!file_exists(base_path('/routes/tabler.php'))){
            copy(__DIR__.'/../routes/tabler.php', base_path('/routes/tabler.php'));
        }
        $this->loadRoutesFrom(base_path('routes/tabler.php'));
    }
}