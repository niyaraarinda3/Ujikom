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
        $pemesanan = new Pemesanan();   
        $pemesanan->id_hotel = $request->jenis_kamar;
        $pemesanan->nama = $request->nama;
        $pemesanan->jenis_kelamin = $request->jenis_kelamin;
        $pemesanan->nomor_identitas = $request->nomor_identitas;
        $pemesanan->jenis_kamar = $request->jenis_kamar;
        $pemesanan->harga = hotel::find($request->jenis_kamar)->harga;
        $pemesanan->tanggal_menginap = $request->tanggal_menginap;
        $pemesanan->durasi_menginap = $request->durasi_menginap;
        $pemesanan->total_bayar = $request->total_bayar;
        $pemesanan->save();
        return redirect()->route('pemesanan.hotel')->with('success', 'Pemesanan berhasil dilakukan');
    }
    
    public function calculateTotalBayar(Request $request)
    {
        $harga = $request->harga;
        $durasi_menginap = $request->durasi_menginap;
        $breakfast = $request->breakfast;
        $total_bayar = $harga * $durasi_menginap;
        if ($durasi_menginap > 3) {
            $total_bayar -= $total_bayar * 0.1;
        }
        if ($breakfast) {
            $total_bayar += 80000;
        }
        return $total_bayar;
    }
    
}
