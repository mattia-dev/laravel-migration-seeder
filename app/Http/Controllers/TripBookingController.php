<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripBookingController extends Controller
{
    public function index($id){
        $trip = Trip::find($id);
        return view('trip',compact('trip'));
    }
}