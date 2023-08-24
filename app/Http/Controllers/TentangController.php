<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    function viewTentang(Request $request)
    {
        
        return view('hotel.tentang');
    }
}
