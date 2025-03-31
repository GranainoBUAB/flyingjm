<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plane extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'registration',
        'imgplane',
        'seats'

    ];

    static function totalSeats()
    {
        $allPlanes = Plane::all();
        $totalSeats = 0;

        foreach($allPlanes as $plane){
            $totalSeats = $totalSeats + $plane->seats;
        }

        return $totalSeats;
    }


}
