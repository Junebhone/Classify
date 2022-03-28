<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\View\Component;

class MainHeading extends Component
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
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('components.main-heading', compact('subcategories', 'categories'));
    }
}