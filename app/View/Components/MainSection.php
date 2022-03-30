<?php

namespace App\View\Components;

use App\Models\SubCategory;
use Illuminate\View\Component;

class MainSection extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $subcategories = SubCategory::all()->take(4);
        return view('components.main-section', compact('subcategories'));
    }
}