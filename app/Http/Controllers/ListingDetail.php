<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class ListingDetail extends Controller
{
    public function index($id)
    {
        $listing = Listing::find($id);
        return view('frontend.details', compact('listing'));
    }
}
