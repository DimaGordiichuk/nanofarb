<?php

namespace App\Observers\Shop;

use App\Models\Shop\Product;

class ProductObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        if ($source = $product->generateUrlSource()) {
            $product->urlAlias()->create([
                'alias' => $product->generateUrlAlias(),
                'source' => $source == '/' ? '/' : trim($source, '/'),
                'locale' => $product->locale,
                'locale_bound' => request('locale_bound'),
            ]);
        }
        if ($metaTags = $product->generateMetaTags()) {
            $product->metaTag()->create($metaTags);
        }
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //if ($source = $product->generateUrlSource()) {
        //    $product->urlAlias()->updateOrCreate([], [
        //        'alias' => $product->generateUrlAlias(),
        //        'source' => $source == '/' ? '/' : trim($source, '/'),
        //    ]);
        //}
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        $product->urlAliases()->delete();
        $product->metaTag()->delete();

        if ($product->group && $product->group->products->count() === 1 && $product->group->default_product_id === $product->id) {
            $product->group->delete();
        }
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
