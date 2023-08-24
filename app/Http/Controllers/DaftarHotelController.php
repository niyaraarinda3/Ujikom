<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class DaftarHotelController extends Controller
{
    public function viewDaftarHotel(Request $request)
    {
        $daftarHotel = Hotel::get();
        
        return view('hotel.daftarHotel', ['daftarHotel' => $daftarHotel]);
    }
}
