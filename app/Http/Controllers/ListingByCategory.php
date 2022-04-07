<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ListingByCategory extends Controller
{
    public function index($id)
    {
        $listings = Listing::where("category_id", $id)->where("is_published", true)->latest()->get();
        $subcategories = SubCategory::where("category_id", $id)->latest()->get();
        $category = Category::where("id", $id)->first();
        return view('frontend.listings', compact('listings', 'category', 'subcategories'));
    }
}