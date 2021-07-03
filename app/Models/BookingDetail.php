<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $fillable=[
        'booking_id','room_id','quantity',
    ];

    public function booking(){
        return $this->belongsTo(Booking::class,'booking_id');
    }

    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
}
