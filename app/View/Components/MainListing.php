<?php

namespace App\View\Components;

use App\Models\Listing;
use Illuminate\View\Component;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class MainListing extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $listings = QueryBuilder::for(Listing::class)
            ->allowedFilters([
                'title',
                AllowedFilter::exact('country_id'),
                AllowedFilter::exact('category_id'),
                AllowedFilter::scope('max_price'),
            ])->where('is_published', true)
            ->get();
        return view('components.main-listing', compact('listings'));
    }
}