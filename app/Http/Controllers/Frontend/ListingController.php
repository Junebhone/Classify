<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

use function GuzzleHttp\Promise\all;

class ListingController extends Controller
{
    public function index()
    {

        $listings = QueryBuilder::for(Listing::class)
            ->allowedFilters([
                'title',
                AllowedFilter::exact('country_id'),
                AllowedFilter::exact('category_id'),
                AllowedFilter::scope('max_price'),
            ])
            ->get();

        $categories = Category::all();

        return view('frontend.all-listings', compact('categories'));
    }
    public function welcome()
    {

        return view('welcome');
    }
}