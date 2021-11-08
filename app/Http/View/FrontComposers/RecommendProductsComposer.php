<?php
/**
 * Created by PhpStorm.
 * User: fomvasss
 * Date: 27.01.19
 * Time: 11:51
 */

namespace App\Http\View\FrontComposers;

use App\Cart\ProductCart;
use Illuminate\View\View;

class RecommendProductsComposer
{
    /**
     * @param \Illuminate\View\View $view
     */
    public function compose(View $view)
    {
        $recommend_products = \Cache::remember(serialize(variable('recommend_products', '[]')), 10, function () {
            return \App\Models\Shop\Product::with('media', 'reviews', 'group.product.media', 'urlAlias')
                ->isPublish()->whereIn('id', json_decode(variable('home_page_bestsellers', '[]')))->get();
        });

        $view->with(compact('recommend_products'));
    }
}