<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingBySubCategory extends Controller
{
    public function index()
    {
        return view('frontend.subcategory');
    }
}