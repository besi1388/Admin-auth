<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleDetail extends Model
{
    use HasFactory;

    protected $fillable = ['dors', 'seats','vehicle_id'];

    public function vehicles(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
   
}
