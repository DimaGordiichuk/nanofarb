<?php

namespace App\Observers;

use App\Models\Taxonomy\Term;

class TermObserver
{
    /**
     * Handle the term "created" event.
     *
     * @param  \App\Models\Taxonomy\Term  $term
     * @return void
     */
    public function created(Term $term)
    {
        if ($source = $term->generateUrlSource()) {
            $term->urlAlias()->create([
                'alias' => $term->generateUrlAlias(),
                'source' => $source == '/' ? '/' : trim($source, '/'),
                'locale' => $term->locale,
                'locale_bound' => request('locale_bound'),
            ]);
        }

        if (empty($term->system_name) && ($system_name = $term->generateSystemName())) {
            $term->setAttribute('system_name', $system_name);
            $term->save();
        }

        if ($metaTags = $term->generateMetaTags()) {
            $term->metaTag()->create($metaTags);
        }
    }

    /**
     * Handle the term "updated" event.
     *
     * @param  \App\Models\Taxonomy\Term  $term
     * @return void
     */
    public function updated(Term $term)
    {
        //
    }

    /**
     * Handle the term "deleted" event.
     *
     * @param  \App\Models\Taxonomy\Term  $term
     * @return void
     */
    public function deleted(Term $term)
    {
        $term->urlAliases()->delete();
        $term->metaTag()->delete();

    }

    /**
     * Handle the term "restored" event.
     *
     * @param  \App\Models\Taxonomy\Term  $term
     * @return void
     */
    public function restored(Term $term)
    {
        //
    }

    /**
     * Handle the term "force deleted" event.
     *
     * @param  \App\Models\Taxonomy\Term  $term
     * @return void
     */
    public function forceDeleted(Term $term)
    {
        //
    }
}
