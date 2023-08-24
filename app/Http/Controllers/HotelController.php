<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    function viewHome(Request $request)
    {
        $hotel = Hotel::get();
        
        return view('hotel.home');
    }
}
