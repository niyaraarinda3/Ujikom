<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    
    protected $table = 'pemesanans';

    protected $fillable = [
        'id_hotel',
        'nama',
        'jenis_kelamin',
        'nomor_identitas',
        'jenis_kamar',
        'harga',
        'tanggal_menginap',
        'durasi_menginap',
        'total_bayar',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id');
    }
}
