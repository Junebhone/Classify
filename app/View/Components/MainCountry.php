<?php

namespace App\View\Components;

use App\Models\Country;
use Illuminate\View\Component;

class MainCountry extends Component
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
        $countries = Country::inRandomOrder()->limit(6)->get();
        return view('components.main-country', compact('countries'));
    }
}