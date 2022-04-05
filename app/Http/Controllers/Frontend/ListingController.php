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


        return view('frontend.all-listings');
    }
    public function welcome()
    {
        return view('welcome');
    }
}