<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ListingBySubCategory extends Controller
{
    public function index($id)
    {

        $listings = QueryBuilder::for(Listing::class)
            ->allowedFilters([
                'title',
                AllowedFilter::exact('country_id'),
                AllowedFilter::exact('category_id'),
                // AllowedFilter::scope('max_price'),
            ])->where("sub_category_id", $id)->where('is_published', true)
            ->latest()->get();

        // $listings = Listing::where("sub_category_id", $id)->where("is_published", true)->latest()->get();
        $subcategory = SubCategory::where("id", $id)->first();
        return view('frontend.subcategory', compact('listings', 'subcategory'));
    }
}