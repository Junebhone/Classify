<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ListingBySubCategory extends Controller
{
    public function index($id)
    {

        $listings = Listing::where("sub_category_id", $id)->latest()->get();
        $subcategory = SubCategory::where("id", $id)->first();
        return view('frontend.subcategory', compact('listings', 'subcategory'));
    }
}