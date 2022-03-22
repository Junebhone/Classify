<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class MainFeatured extends Component
{


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();
        return view('components.main-featured', compact('categories'));
    }
}