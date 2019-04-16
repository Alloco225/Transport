<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'logo',
    ];
    // Relations
    public function bookings(){
        return $this->hasMany('App\Booking');
    }
    public function cars(){
        return $this->hasMany('App\Car');
    }
    public function drivers(){
        return $this->hasMany('App\Driver');
    }
    public function journeys(){
        return $this->hasMany('App\Journey');
    }
    public function stations(){
        return $this->hasMany('App\Station');
    }
}