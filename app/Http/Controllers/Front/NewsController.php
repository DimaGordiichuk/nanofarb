<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $nodes = News::isPublish()->orderBy('created_at', 'desc')->byLocale()->paginate();

        return view('front.news.index', compact('nodes'));
    }

    public function show($id)
    {
        $node = News::isPublish()->findOrFail($id);

        return view('front.news.show', compact('node'));
    }
}
