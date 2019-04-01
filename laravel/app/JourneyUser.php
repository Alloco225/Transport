<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JourneyUser extends Model
{
    //
    protected $fillable = [
        'journey_id',
        'user_id',
    ];
    // Relations
    public function journeys(){
        return $this->belongsTo('App\Journey');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function luggages(){
        return $this->hasMany('App\Luggages');
    }
}
