<?php

namespace App\Observers\Shop;

use App\Models\Shop\Sale;

class SaleObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Models\Shop\Product  $sale
     * @return void
     */
    public function created(Sale $sale)
    {
        if ($source = $sale->generateUrlSource()) {
            $sale->urlAlias()->create([
                'alias' => $sale->generateUrlAlias(),
                'source' => $source == '/' ? '/' : trim($source, '/'),
                'locale' => $sale->locale,
                'locale_bound' => request('locale_bound'),
            ]);
        }

        if ($metaTags = $sale->generateMetaTags()) {
            $sale->metaTag()->create($metaTags);
        }
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Models\Shop\Product  $sale
     * @return void
     */
    public function updated(Sale $sale)
    {
        //
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Models\Shop\Product  $sale
     * @return void
     */
    public function deleted(Sale $sale)
    {
        $sale->urlAliases()->delete();
        $sale->metaTag()->delete();
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Models\Shop\Product  $sale
     * @return void
     */
    public function restored(Sale $sale)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Models\Shop\Product  $sale
     * @return void
     */
    public function forceDeleted(Sale $sale)
    {
        //
    }
}
