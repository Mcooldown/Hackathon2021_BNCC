<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable=[
        'booking_id','total_pay'
    ];

    public function booking(){
        return $this->belongsTo(Booking::class,'booking_id');
    }

}
