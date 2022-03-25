<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingDetail extends Controller
{
    public function index($id)
    {
        $listings = Listing::where("id", $id)->first();
        return view('frontend.details', compact('listings'));
    }
}