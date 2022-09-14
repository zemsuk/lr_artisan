<?php

namespace Zems\lrArtisan;

use Illuminate\Support\ServiceProvider;

class ZemsArtisanProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->LoadViewsFrom(__DIR__.'/views', 'lrartisan'); 
        $this->app->singleton(ZemsArtisan::class, function(){
            return new ZemsArtisan();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/include/routes.php';
        // dd("Hi from Zems Package");
    }
}
