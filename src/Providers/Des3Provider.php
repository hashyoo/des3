<?php

namespace HashyooDes3\Providers;

use Illuminate\Support\ServiceProvider;

class Des3Provider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $path = realpath(__DIR__.'/../../config/config.php');
        $this->publishes(array($path => config_path('hashyoo-des3.php')), 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 在容器中注册
        $this->app->singleton('DES3', function (){
            $key = config('hashyoo-des3.DES3_KEY');
            $iv = config('hashyoo-des3.DES3_IV');
            return new Des3Provider($key, $iv);
        });
    }
}
