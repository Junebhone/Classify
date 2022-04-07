<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Listing;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ListingByCountry extends Controller
{
    public function index($id)
    {

        $listings = Listing::where("country_id", $id)->where("is_published", true)->latest()->get();
        $country = Country::where("id", $id)->first();
        $categories = Category::all();
        return view('frontend.country', compact('listings', 'country', 'categories'));
    }
}