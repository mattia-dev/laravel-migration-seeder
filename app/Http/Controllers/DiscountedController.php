<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountedController extends Controller
{
    public function index() {
        $discountedTrips = Trip::where('discount', '>', 0)->get();
        return view('discounted', compact('discountedTrips'));
    }
}
