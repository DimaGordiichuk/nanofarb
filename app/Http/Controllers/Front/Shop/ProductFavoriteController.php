<?php

namespace App\Http\Controllers\Front\Shop;

use App\Models\Shop\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductFavoriteController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param $productId
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function toggle(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        \Favorite::toggle($product->id);

        $destination = $request->session()->pull('destination', route('home'));
        if ($request->ajax()) {
            return response()->json([
                'message' => trans('notifications.store.success'),
                //'action' => 'redirect',
                'html' => view('front.products.inc.modal-favorites')->render(),
                'destination' => $destination,
            ]);
        }

        return redirect()->to($destination)
            ->with('success', trans('notifications.store.success'));
    }

    /**
     * Not yet used!
     *
     * @param \Illuminate\Http\Request $request
     * @param $productId
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        \Favorite::add($product->id);

        $destination = $request->session()->pull('destination', \URL::previous());
        if ($request->ajax()) {
            return response()->json([
                'message' => trans('notifications.update.success'),
                //'action' => 'redirect',
                'html' => view('front.products.inc.modal-favorites')->render(),
                'destination' => $destination,
            ]);
        }

        return redirect()->to($destination)
            ->with('success', trans('notifications.store.success'));
    }

    /**
     * Use on account/favorites page.
     *
     * @param \Illuminate\Http\Request $request
     * @param $productId
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function remove(Request $request, $productId)
    {
        \Favorite::remove($productId);

        $destination = $request->session()->pull('destination', \URL::previous());
        if ($request->ajax()) {
            return response()->json([
                'message' => trans('notifications.update.success'),
                'action' => 'redirect',
                'destination' => $destination,
            ]);
        }

        return redirect()->to($destination)
            ->with('success', trans('notifications.destroy.success'));
    }

}
