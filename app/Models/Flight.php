<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //    use HasFactory;

    protected $fillable = [
        'airportDeparture',
        'airportArrival',
        'date',
        'plane_id',
    ];
}
