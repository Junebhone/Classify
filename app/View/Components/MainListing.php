<?php

namespace App\View\Components;

use App\Models\Listing;
use Illuminate\View\Component;

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
        $listings = Listing::all();
        return view('components.main-listing', compact('listings'));
    }
}