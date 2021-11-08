<?php

namespace App\Observers;

use App\Models\Page;

class PageObserver
{
    /**
     * Handle the page "created" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function created(Page $page)
    {
        if ($source = $page->generateUrlSource()) {
            $page->urlAlias()->create([
                'alias' => $page->generateUrlAlias(),
                'source' => $source == '/' ? '/' : trim($source, '/'),
                'locale' => $page->locale,
                'locale_bound' => request('locale_bound'),
            ]);
        }
        if ($metaTags = $page->generateMetaTags()) {
            $page->metaTag()->create($metaTags);
        }
    }

    /**
     * Handle the page "updated" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function updated(Page $page)
    {
        //
    }

    /**
     * Handle the page "deleted" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function deleted(Page $page)
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
    public function restored(Page $page)
    {
        //
    }

    /**
     * Handle the page "force deleted" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function forceDeleted(Page $page)
    {
        //
    }
}
