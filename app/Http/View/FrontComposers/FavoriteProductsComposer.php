<?php
/**
 * Created by PhpStorm.
 * User: fomvasss
 * Date: 27.01.19
 * Time: 11:51
 */

namespace App\Http\View\FrontComposers;

use App\Cart\ProductCart;
use App\Models\Shop\Product;
use Illuminate\View\View;

class FavoriteProductsComposer
{
    /**
     * @param \Illuminate\View\View $view
     */
    public function compose(View $view)
    {
        $favoriteProducts = Product::with('values')->whereIn('id', array_reverse(\Favorite::get()))
            ->with('media', 'group.product.media', 'urlAlias'/*, 'reviews'*/)->get();

        $view->with(compact('favoriteProducts'));
    }
}