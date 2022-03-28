<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {

        $listings = Listing::paginate(4);
        return view('admin.listings.index', compact('listings'));
    }
}