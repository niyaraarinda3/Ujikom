<?php

namespace Database\Seeders;

use App\Models\Pemesanan;
use App\Models\Hotel;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'jenis_kamar'=>'Standar',
            'harga'=> 400000, 
            'gambar'=>'https://hotelanthracite.com/wp-content/uploads/2018/08/Hotel-Anthracite-Rooms-Queen-1.jpg',
            'vidio'=>'https://www.youtube.com/embed/bk9dBovTyoU?si=gnz08FF_0HbKk3fo',
            ]);
            
        Hotel::create([
            'jenis_kamar'=>'Deluxe',
            'harga'=> 700000, 
            'gambar'=>'https://www.rghk.com.hk/uploads/images/gallery-03-170728105100.jpg',
            'vidio'=>'https://www.youtube.com/embed/A83syCB5LJs?si=0YouLcdVZzV77RPe',
            ]);

        Hotel::create([
            'jenis_kamar'=>'Family',
            'harga'=> 1000000, 
            'gambar'=>'https://www.maldronhotellimerick.com/wp-content/uploads/sites/9/2019/11/family-bedroom.jpg',
            'vidio'=>'https://www.youtube.com/embed/V0ZmEre9PIU?si=hIZjUtixoEhIKCYG',
            ]);
    }
}