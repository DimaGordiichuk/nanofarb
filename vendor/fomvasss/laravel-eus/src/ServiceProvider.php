<?php

namespace Fomvasss\LaravelEUS;

use Fomvasss\LaravelEUS\EUSGenerator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = false;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishedConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/eus.php', 'eus');

        $this->app->bind(\Fomvasss\LaravelEUS\Contracts\EUSGenerator::class, function () {
            return new EUSGenerator($this->app);
        });
    }

    protected function publishedConfig()
    {
        $this->publishes([
            __DIR__.'/../config/eus.php' => config_path('eus.php')
        ], 'eus');
    }
}
