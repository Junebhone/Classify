<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingByCategory extends Controller
{
    public function index($id)
    {
        $listings = Listing::where("category_id", $id)->latest()->get();
        $category = Category::where("id", $id)->first();
        return view('frontend.listings', compact('listings', 'category'));
    }
}