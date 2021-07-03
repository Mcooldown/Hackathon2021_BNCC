<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_time', 'end_time', 'price', 'transfer_proof', 'is_eligible', 'user_id', 'ota_id',
    ];
}
