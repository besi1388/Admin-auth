<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{
    use HasFactory;

    protected $fillable = ['name','make_id'];


    public function makes()
    {
        return $this->belongsTo(Make::class);
    }

   

}
