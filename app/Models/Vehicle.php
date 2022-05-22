<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['name','model', 'engine', 'image', 'status', 'color', 'price','mod_id'];


    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function veicleDetails(){
        return $this->hasMany(VeicleDetail::class);
    }

    public function mods(){
        return $this->belongsTo(Mod::class, 'mod_id', 'id');
    }

}
