<?php

namespace App\Http\Controllers\Api\Cdek;

use App\Services\Cdek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    /**
     * Автокомплит списка городов с БД.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cities(Request $request)
    {
        $res = [];
        if ($request->q) {
            $cities = \DB::table('cdek_cities')
                ->orWhere('search', 'LIKE', "%$request->q%")
                ->orderBy('id')
                ->limit(40)->get();

            foreach ($cities as $item) {
                $res[] = [
                    'id' => $item->id,
                    'text' => "$item->search",
                ];
            }
        }

        return ['results' => $res];
    }
}
