<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HOtel;

class DaftarHargaController extends Controller
{
    public function viewDaftarHarga(Request $request)
    {
        $daftarHarga = Hotel::get();
        
        return view('hotel.daftarHarga', ['daftarHarga' => $daftarHarga]);
    }
}
