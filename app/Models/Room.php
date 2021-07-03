<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=[
        'accomodation_id','type','photo','description','slot','price',
    ];

    public function acomodation(){
        return $this->belongsTo(Accomodation::class,'accomodation_id');
    }
}
