<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=[
        'accomodation_id','type','photo','description','slot','price',
    ];

<<<<<<< HEAD
    public function accomodation(){
=======
    public function acomodation(){
>>>>>>> df0de32fb47539a24240a469982f83416ea129fc
        return $this->belongsTo(Accomodation::class,'accomodation_id');
    }
}
