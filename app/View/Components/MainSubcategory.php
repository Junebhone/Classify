<?php

namespace App\View\Components;

use App\Models\SubCategory;
use Illuminate\View\Component;

class MainSubcategory extends Component
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
        $subcategories = SubCategory::all();
        return view('components.main-subcategory', compact('subcategories'));
    }
}