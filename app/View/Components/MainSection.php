<?php

namespace App\View\Components;

use App\Models\Category;
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
        $categories = Category::inRandomOrder()->limit(4)->get();
        return view('components.main-section', compact('categories'));
    }
}