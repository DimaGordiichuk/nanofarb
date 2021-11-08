<?php

namespace App\Providers;

use App\Http\View\FrontComposers\MenusComposer;
use App\Models\Menu\Menu;
use App\Models\Menu\MenuItem;
use App\Models\Shop\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            View::composer([
                'front.pages.home',
                'front.layouts.inc.footer',
                'front.layouts.inc.header',
            ], \App\Http\View\FrontComposers\MenusComposer::class);

            //View::composer('front.products.inc.modal-cart', \App\Http\View\FrontComposers\ShoppingCartComposer::class);
            //
            //View::composer('front.products.inc.modal-favorites', \App\Http\View\FrontComposers\FavoriteProductsComposer::class);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MenusComposer::class);
    }
}
