<?php

namespace Modules\ExternalShop\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\ExternalShop\Events\OrderCreated;
use Modules\ExternalShop\Listeners\NotifyOfOrderCreated;

class ExternalShopServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommands();
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('ExternalShop', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app['events']->listen(OrderCreated::class, NotifyOfOrderCreated::class);
    }

    protected function registerCommands()
    {
        $this->commands([
            \Modules\ExternalShop\Console\GetOrders::class
        ]);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('ExternalShop', 'Config/config.php') => config_path('externalshop.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('ExternalShop', 'Config/config.php'), 'externalshop'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/externalshop');

        $sourcePath = module_path('ExternalShop', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/externalshop';
        }, \Config::get('view.paths')), [$sourcePath]), 'externalshop');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/externalshop');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'externalshop');
        } else {
            $this->loadTranslationsFrom(module_path('ExternalShop', 'Resources/lang'), 'externalshop');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('ExternalShop', 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
