<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Hotel;

class PemesananController extends Controller
{
    public function viewPemesanan(Request $request)
    {
        $hotel = Hotel::all();
        return view('hotel.pemesanan')->with('hotel', $hotel);
    }
    public function createPemesanan(Request $request)
    {
    //  dd($request->all());
    $hotel = Hotel::find($request->id_hotel);

    if (!$hotel) {
        return redirect()->back()->with('error', 'Hotel tidak ditemukan');
    }

    $hargaHotel = $hotel->harga;
    $durasiMenginap = $request->input('durasi_menginap');

    $totalBayar = $hargaHotel * $durasiMenginap; // Initialize the totalBayar
    
    // Diskon 10% jika lama menginap lebih dari 3 hari
    if ($durasiMenginap > 3) {
        $totalBayar *= 0.9; // Diskon 10%
    }

    // Tambahan biaya untuk breakfast
    if ($request->input('breakfast')) {
        $totalBayar += 80000; // Biaya breakfast 80,000
    }

    // Create a new Pemesanan entry
    $daftarPemesanan = Pemesanan::create([
        'id_hotel' => $request->id_hotel,
        'nama' => $request->input('nama'),
        'jenis_kelamin' => $request->input('jenis_kelamin'),
        'nomor_identitas' => $request->input('nomor_identitas'),
        'jenis_kamar' => $request->input('jenis_kamar'),
        'harga' => $hargaHotel,
        'tanggal_menginap' => $request->input('tanggal_menginap'),
        'durasi_menginap' => $durasiMenginap,
        'total_bayar' => $totalBayar,
    ]);

    return redirect()->route('pemesanan.hotel'); // Sesuaikan dengan route yang tepat
}

    
    
}
