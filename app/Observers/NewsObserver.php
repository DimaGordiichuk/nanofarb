<?php

namespace App\Observers;

use App\Models\News;

class NewsObserver
{
    /**
     * Handle the page "created" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function created(News $node)
    {
        if ($source = $node->generateUrlSource()) {
            $node->urlAlias()->create([
                'alias' => $node->generateUrlAlias(),
                'source' => $source == '/' ? '/' : trim($source, '/'),
                'locale' => $node->locale,
                'locale_bound' => request('locale_bound'),
            ]);
        }
        if ($metaTags = $node->generateMetaTags()) {
            $node->metaTag()->create($metaTags);
        }
    }

    /**
     * Handle the page "updated" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function updated(News $page)
    {
        //
    }

    /**
     * Handle the page "deleted" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function deleted(News $page)
    {
        $page->urlAliases()->delete();
        $page->metaTag()->delete();
    }

    /**
     * Handle the page "restored" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function restored(News $page)
    {
        //
    }

    /**
     * Handle the page "force deleted" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function forceDeleted(News $page)
    {
        //
    }
}
