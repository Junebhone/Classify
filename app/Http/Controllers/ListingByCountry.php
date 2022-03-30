<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Listing;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ListingByCountry extends Controller
{
    public function index($id)
    {

        $listings = Listing::where("country_id", $id)->latest()->get();
        $country = Country::where("id", $id)->first();
        return view('frontend.country', compact('listings', 'country'));
    }
}
