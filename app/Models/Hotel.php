<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    function hotel()
    {
        return $this->belongsTo(hotel::class, 'id_hotel', 'id');
    }
}