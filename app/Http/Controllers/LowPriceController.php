<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class LowPriceController extends Controller
{
    public function index() {
        $lowPriceTrips = Trip::where('price', '<', 400)->get();
        return view('lowPrice', compact('lowPriceTrips'));
    }
}
