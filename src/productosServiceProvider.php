<?php

namespace paquetes\productos;

use Illuminate\Support\ServiceProvider;

class productosServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/routes.php';
        }

       
        $this->loadViewsFrom(__DIR__.'resources/views','productos');
      
        $this->publishes([
            __DIR__.'/views' => base_path('/views'),
        ]);

        $this->publishes([
            __DIR__.'/migrations' => base_path('./migrations'),
        ],'migrations');
    
 

        

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        
    }
}